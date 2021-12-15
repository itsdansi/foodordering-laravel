<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('components.admin.evnt.index',['events'=> $events]);
        // return $categories;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        return view('components.admin.evnt.create',['event'=> $event]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        $event->event_location = $request->event_location;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        if($event->save())
        {
            return redirect()->route('event_list')->with('success','event Added Successfully');
        }
        else
        {
            return redirect()->route('/admin.evnt.index')->with('error','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $event = Event::find($event->id);
        return view('components.admin.evnt.edit',['event'=> $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name' => 'required',
            'event_desc' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_location' => 'required',
            // 'event_image' => 'required',
        ]);
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->event_location = $request->event_location;
        // $event->event_image = $request->event_image;
        if($event->save())
        {
            return redirect()->route('event_list')->with('success','event Added Successfully');
        }
        else
        {
            return redirect()->route('/admin.event.index')->with('error','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
       if ($event->delete()) {
            return redirect()->route('event_list')->with('success','event Deleted Successfully');
        }
        else
        {
            return redirect()->route('/admin.evnt.index')->with('error','Something went wrong');
        }
    }
}
