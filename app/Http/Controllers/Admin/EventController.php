<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.event.listevent', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.addevent');
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
            'date' => 'required',
            'place' => 'required',
            'organizer' => 'required',
            'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'place' => $request->place,
            'organizer' => $request->organizer,
            'image' => $request->image->store('Events', 'public'),
        ]);
        return redirect()->route('List-Event')->with('success', 'Event Created Sucessfully!');
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
        $events = Event::find($id);
        $pic = $events->image;
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'place' => 'required',
            'organizer' => 'required',
            'image'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->image) {
            if (File::exists("storage/" . $pic)) {
                File::delete("storage/" . $pic);
            }
            Event::where('id', $id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'place' => $request->place,
                'organizer' => $request->organizer,
                'image' => $request->image->store('Events', 'public'),
            ]);
        } else {
            Event::where('id', $id)->update([
                'name' => $request->name,
                'date' => $request->date,
                'place' => $request->place,
                'organizer' => $request->organizer,
            ]);
        }
        return redirect()->route('List-Event')->with('success', 'Event Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::where('id', '=', $id)->first();
        $pic = $events->image;
        if (File::exists("storage/" . $pic)) {
            File::delete("storage/" . $pic);
        }
        $events->delete();
        return redirect()->route('List-Event')->with('error', 'Event Deleted Sucessfully!');
    }
}
