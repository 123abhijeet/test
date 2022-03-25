<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\Bloodbank;
use App\Models\Bloodrequest;
use App\Models\Donor;
use App\Models\Event;
use App\Models\Hospital;
use App\Models\Receiver;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function home()
    {
        $users = User::where('is_admin','!=',1)->get()->count();
        $bloodbanks = Bloodbank::all()->count();
        $bloodrequests = Bloodrequest::all()->count();
        $donors = Donor::all()->count();
        $events = Event::all()->count();
        $hospitals = Hospital::all()->count();
        $receivers = Receiver::all()->count();
        return view('admin.index',compact('users','bloodbanks','bloodrequests','donors','events','hospitals','receivers'));
    }
    public function setpassword()
    {
        $email = Session::get('email');
        $userdetails = Userdetail::where('email', $email)->first();
        return view('setpassword', compact('userdetails'));
    }
    // public function getusername($username)
    // {
    //     $getuser = User::where('username', $username)->first();
    //     return response()->json($getuser);
    // }
}
