<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use \App\Mail\SendMail;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use DB;

class AuthController extends Controller
{
    public function checkemail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return \Response::json([
                'status' => false, 'message' => 'error', 'error' => $validator->errors()
            ]);
        }
        $data = User::where('email', $request->email)->first();
        if ($data === null) {
            return response()->json(['status' => true, 'message' => 'User Not Found'], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'User already exists!'], 200);
        }
    }
    public function register(Request $request)
    {
        $unique_id = User::orderBy('id', 'desc')->first();
        $number = str_replace('MB', '', $unique_id ? $unique_id->id  : 0);
        if ($number == 0) {
            $number = 'MB001';
        } else {
            $number = "MB" . sprintf("%03d", (int)$number + 1);
        }
        $name = strtok($request->name, " ");
        $username =  $name . $number;
        $password = $request->password;
        $user = new User;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'username' => 'unique:users',
            'mobile' => 'required|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8|same:password_confirmation',
        ]);
        if ($validator->fails()) {
            return \Response::json([
                'status' => false,
                'message' => 'error',
                'error' => $validator->errors()
            ]);
        }
        $user->is_admin = '0';
        $user->name = $request->name;
        $user->username =  $username;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            $details = [
                'title' => 'welcome to myblood  ' . $user->name,
                'body' =>  'your username is ' . $user->username . ' and password is ' . $password,
            ];
            \Mail::to($user->email)->send(new SendMail($details));
            return response()->json(['status' => true, 'message' => 'User created sucessfully'], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'Something went wrong'], 400);
        }
    }
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->orwhere('username', $request->username)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['status' => false, 'message' => 'Invalid Credential'], 200);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'status' => true,
            'message' => 'login sucessfully',
            'user_details' => $user,
            'token' => $token
        ];
        User::where('email', $request->email)->orwhere('username', $request->username)->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->ip(),
        ]);
        return response($response, 200);
    }
    public function forgot(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $credentials = request()->validate(['email' => 'required|email']);
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Email not exist!'], 200);
        }
        Password::sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }
    public function reset()
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(["msg" => "Invalid token provided"], 400);
        }

        return response()->json(["msg" => "Password has been successfully changed"]);
    }
    public function changepswd(Request $request)
    {
        $user = User::find($request->id);
        $old_password = $user->password;
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|same:password_confirmation',
        ]);
        if (Hash::check($request->password, $old_password)) {
            return response()->json(["error" =>  "Error! New Password and Current password can't be same."]);
        } elseif (Hash::check($request->current_password, $old_password)) {
            $obj_user = User::find($request->id);
            $obj_user->password = Hash::make($request->password);
            $obj_user->save();
            return response()->json(["success" => "Password changed successfully !"]);
        } else {
            return response()->json(["error" =>  "Error! Please enter correct current password."]);
        }
    }
}
