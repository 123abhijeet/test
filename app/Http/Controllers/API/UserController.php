<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bloodbank;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Receiver;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdata()
    {
        $user = User::all();
        return $user;
    }
    public function index(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        if (!$user) {
            return \Response::json([
                'status' => false, 'message' => 'error', 'error' => 'User data not found'
            ]);
        } else {
            return response($user, 200);
        }
    }
    public function donationhistory(Request $request)
    {
        $donation = Donor::where('userid', $request->id)->orderby('date', 'desc')->get();
        $receiving = Receiver::where('userid', $request->id)->orderby('date', 'desc')->get();
    
        $results = array_merge($donation->toArray(), $receiving->toArray());
        usort($results, function ($a, $b) {
            return $a['date'] < $b['date'];
        });
    // return $results;
        if (!$donation || !$receiving) {
            return \Response::json([
                'status' => false, 'message' => 'error', 'error' => 'Not donated yet'
            ]);
        } else {
            return response()->json(['status' => true, $donation, $receiving], 200);
        }
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $validator = Validator::make($request->all(), [
            'name' => '',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'mobile' => 'required|unique:users,mobile,'.$user->id,
            'blood_group' => '',
            'address' => '',
            'pin' => 'numeric|min:6',
            'gender' => '',
            'dob' => '',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        if($request->image)
        {
            User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'blood_group' => $request->blood_group,
                'address' => $request->address,
                'pin' => $request->pin,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'image' =>  $request->image->store('Profile', 'public'),
            ]);
        }else{
            User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'blood_group' => $request->blood_group,
                'address' => $request->address,
                'pin' => $request->pin,
                'gender' => $request->gender,
                'dob' => $request->dob
            ]);
        }
        return response()->json(["msg" => "Profile updated successfully!"]);
    }
    public function hospital()
    {
        $hospital = Hospital::all();
        return response()->json(["status" => true, $hospital], 200);
    }
    public function bloodbank()
    {
        $bloodbank = Bloodbank::all();
        return response($bloodbank);
    }
}
