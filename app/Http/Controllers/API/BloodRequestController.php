<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Bloodrequest;
use \App\Mail\SendMail;
use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Support\Facades\Auth;
use Validator;
use Redirect;
use Mail;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bloodrequests = Bloodrequest::where('userid', $request->id)->get();
        return response($bloodrequests, 200);
    }
    public function notifications()
    {
        $bloodrequests = Bloodrequest::all();
        return response($bloodrequests, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unique_id = Bloodrequest::orderBy('id', 'desc')->first();
        $number = str_replace('MBR', '', $unique_id ? $unique_id->id  : 0);
        if ($number == 0) {
            $number = 'MBR0000001';
        } else {
            $number = "MBR" . sprintf("%07d", (int)$number + 1);
        }
        return response($number);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function acceptrequest(Request $request)
    {
        $requests = Bloodrequest::where('request_number', $request->request_number)->first();
        if (empty($requests->request_number)) {
            return response()->json(['status' => false, 'message' => 'Request Number not found!'], 400);
        } elseif ($requests->status == 'new') {
            Bloodrequest::where('request_number', $request->request_number)->update([
                'status' => 'accepted',
                'donation_status' => 'ongoing',
            ]);
            $user = User::where('id', $requests->userid)->first();
            $details = [
                'title' => 'Some one accepted your blood request',
                'body' =>  'One Donor accepted your blood request he will contact you soon please be patient',
            ];
            \Mail::to($user->email)->send(new SendMail($details));
            return response()->json(['status' => true, 'message' => 'Blood Request accepted sucessfully!'], 200);
        } else {
            return response()->json(['status' => true, 'message' => 'Blood Request already accepted!'], 200);
        }
    }
    public function store(Request $request)
    {
        $unique_id = Bloodrequest::orderBy('id', 'desc')->first();
        $number = str_replace('MBR', '', $unique_id ? $unique_id->id  : 0);
        if ($number == 0) {
            $number = 'MBR0000001';
        } else {
            $number = "MBR" . sprintf("%07d", (int)$number + 1);
        }
        $validator = Validator::make($request->all(), [
            'request_number' => '',
            'patient_name' => 'required',
            'type' => 'required',
            'unit' => 'required',
            'blood_group' => 'required',
            'required_date' => 'required',
            'location' => 'required',
            'pin' => 'required',
            'hospital' => 'required',
            'patient_status' => 'required',
            'requisition_form'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        Bloodrequest::create([
            'userid' => $request->id,
            // 'request_number' => $request->request_number,
            'request_number' => $number,
            'patient_name' => $request->patient_name,
            'type' => $request->type,
            'unit' => $request->unit,
            'blood_group' => $request->blood_group,
            'required_date' => $request->required_date,
            'location' => $request->location,
            'pin' => $request->pin,
            'hospital' => $request->hospital,
            'patient_status' => $request->patient_status,
            'status' => 'new',
            'requisition_form' => $request->requisition_form->store('Requisition Form', 'public'),
        ]);
        $blood_request = Bloodrequest::all()->last();
        $details = [
            'title' => $blood_request->type . ' Required',
            'body' =>  'Patient Name :- ' . $blood_request->patient_name . "\n" .
                'Required Type :- ' . $blood_request->type . "\n" .
                'Required Unit :- ' . $blood_request->unit . "\n" .
                'Required Blood Group :- ' . $blood_request->blood_group . "\n" .
                'Required Date :- ' . $blood_request->required_date . "\n" .
                'Hospital Name :- ' . $blood_request->hospital . "\n" .
                'Location :- ' . $blood_request->location . "\n" .
                'Pin Code :- ' . $blood_request->pin . "\n" .
                'Patient Status :- ' . $blood_request->patient_status,
        ];
        $mails = User::where('pin', $request->pin)->where('blood_group', $request->blood_group)->get();
        foreach ($mails as $mail) {
            \Mail::to($mail->email)->send(new SendMail($details));
        };
        return response()->json(['status' => true, 'message' => 'Blood Request created sucessfully!'], 200);
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
        //
    }
}
