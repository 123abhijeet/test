<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use \App\Mail\SendMail;
use App\Models\Donor;
use App\Models\User;
use App\Models\Receiver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin','!=',1)->get();
        return view('admin.users.listuser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.adduser');
    }
    public function view($id)
    {
        $users = User::where('id', $id)->first();
        $donors = DB::table('donors')
            ->join('users', 'donors.userid', '=', 'users.id')
            ->where('users.id', $id)
            ->select('users.*', 'donors.*')
            ->get();
        $receivers = DB::table('receivers')
            ->join('users', 'receivers.userid', '=', 'users.id')
            ->where('users.id', $id)
            ->select('users.*', 'receivers.*')
            ->get();
        return view('admin.users.profile', compact('users', 'donors', 'receivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $password = Str::random(10);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'mobile' => 'required|unique:users|numeric',
            'blood_group' => 'required',
            'address' => 'required',
            'pin' => 'required|numeric',
            'gender' => 'required',
            'dob' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        User::create([
            'is_admin' => '0',
            'name' => $request->name,
            'username' => $username,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'blood_group' => $request->blood_group,
            'address' => $request->address,
            'pin' => $request->pin,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'password' => Hash::make($password),
        ]);
        // 'password' => Hash::make(Str::random(10)),
        $details = [
            'title' => 'welcome to myblood  '. $request->name ,
            'body' =>  'your username is '. $username . ' and password is ' . $password,
        ];
        \Mail::to($request->email)->send(new SendMail($details));
        return redirect()->back()->with('success', 'User Added Sucessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::where('id', '=', $id)->first();
        $users->delete();
        return redirect()->back()->with('error', 'User sucessfully Deleted!');
    }
}
