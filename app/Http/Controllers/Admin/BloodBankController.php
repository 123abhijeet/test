<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bloodbank;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodbanks = Bloodbank::all();
        return view('admin.blood_bank.listbloodbank',compact('bloodbanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blood_bank.addbloodbank');
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
            'name' => 'required',
            'location' => 'required',
            'pin' => 'required|min:6|max:6',
            'number' => 'required',
            'contact_person' => 'required'
        ]);
        Bloodbank::create([
            'name' => $request->name,
            'location' => $request->location,
            'pin' => $request->pin,
            'number' => $request->number,
            'contact_person' => $request->contact_person,
            'status' => 'active',
        ]);
        return redirect()->route('List-Blood-Bank')->with('success', 'Blood Bank Created Sucessfully!');
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
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'pin' => 'required|min:6|max:6',
            'number' => 'required',
            'contact_person' => 'required'
        ]);
        Bloodbank::where('id',$id)->update([
            'name' => $request->name,
            'location' => $request->location,
            'pin' => $request->pin,
            'number' => $request->number,
            'contact_person' => $request->contact_person
        ]);
        return redirect()->route('List-Blood-Bank')->with('success', 'Blood Bank Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloodbank = Bloodbank::where('id', '=', $id)->first();
        $bloodbank->delete();
        return redirect()->back()->with('error', 'Blood Bank sucessfully Deleted!');
    }
}
