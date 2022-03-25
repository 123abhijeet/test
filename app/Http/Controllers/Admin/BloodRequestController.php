<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Bloodrequest;
use \App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mail;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Bloodrequest::all();
        return view('admin.blood_request.listrequest', compact('requests'));
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
        return view('admin.blood_request.addrequest', compact('number'));
    }

    public function view()
    {
        return view('admin.blood_request.viewrequest');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'request_number' => 'required',
            'patient_name' => 'required',
            'type' => 'required',
            'unit' => 'required',
            'blood_group' => 'required',
            'required_date' => 'required',
            'location' => 'required',
            'pin' => 'required',
            'hospital' => 'required',
            'patient_status' => 'required',
            'requisition_form'  => 'required',
        ]);
        Bloodrequest::create([
            'userid' => Auth::user()->id,
            'request_number' => $request->request_number,
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
        return redirect()->route('List-Request')->with('success', 'Request Created Sucessfully!');
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
        // $service = Service::where('id', $id)->first();
        // $pic = $service->image;
        // if (File::exists("storage/" . $pic)) {
        //     File::delete("storage/" . $pic);
        // }
        // $service->delete();
        // return redirect()->back()->with('error', 'Data deleted Sucessfully!');
    }
}
