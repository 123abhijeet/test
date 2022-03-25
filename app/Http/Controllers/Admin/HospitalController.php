<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('admin.hospital.listhospital',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospital.addhospital');
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
        Hospital::create([
            'name' => $request->name,
            'location' => $request->location,
            'pin' => $request->pin,
            'number' => $request->number,
            'contact_person' => $request->contact_person,
            'status' => 'active',
        ]);
        return redirect()->route('List-Hospital')->with('success', 'Hospital Created Sucessfully!');
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
        Hospital::where('id',$id)->update([
            'name' => $request->name,
            'location' => $request->location,
            'pin' => $request->pin,
            'number' => $request->number,
            'contact_person' => $request->contact_person,
        ]);
        return redirect()->route('List-Hospital')->with('success', 'Hospital Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = Hospital::where('id', '=', $id)->first();
        $hospital->delete();
        return redirect()->back()->with('error', 'Hospital sucessfully Deleted!');
    }
}
