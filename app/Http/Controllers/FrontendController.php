<?php

namespace App\Http\Controllers;

use App\Models\Bloodbank;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Receiver;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('frontend.profile',compact('user'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function history()
    {
        $donation = Donor::where('userid', Auth::user()->id)->orderby('date', 'desc')->get();
        $receiving = Receiver::where('userid', Auth::user()->id)->orderby('date', 'desc')->get();
    
        $histories = array_merge($donation->toArray(), $receiving->toArray());
        usort($histories, function ($a, $b) {
            return $a['date'] < $b['date'];
        });
        return view('frontend.history',compact('donation','receiving','histories'));
    }
    public function bloodbank()
    {
        $bloodbanks = Bloodbank::all();
        return view('frontend.bloodbank',compact('bloodbanks'));
    }
    public function hospital()
    {
        $hospitals = Hospital::all();
        return view('frontend.hospital',compact('hospitals'));
    }
    public function updateprofile(Request $request)
    {
        $user = Auth::user(); 
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
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'blood_group' => $request->blood_group,
                'address' => $request->address,
                'pin' => $request->pin,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'image' =>  $request->image->store('Profile'),
            ]);
        }else{
            User::where('id', Auth::user()->id)->update([
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
        return redirect()->back()->with("sucess","Profile Updated");
    }
}
