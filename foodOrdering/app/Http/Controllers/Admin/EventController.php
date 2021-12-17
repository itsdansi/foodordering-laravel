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
        
        $request->validate([
            'event_name' => 'required|unique:events|max:255',
            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'event_desc' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_location' => 'required',
        ]);
        if($request->hasFile('event_image') )
        {
            // $name=time().'.'.$request->event_image->getClientOriginalName();
            $path = $request->file('event_image')->store('public/event_images');
            // $event->event_image = $name;
        }
     
        $event = new Event;
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        $event->event_location = $request->event_location;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->event_image = $path;

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
            'event_name' => 'required|unique:events|max:255',
            'event_desc' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_location' => 'required',
            // 'event_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         
        ]);
        // if($request->hasFile('event_image') )
        // {
        //     // $name=time().'.'.$request->event_image->getClientOriginalName();
        //     $path = $request->file('event_image')->store('public/event_images');
        //     // $event->event_image = $name;
        // }
     
        $event->event_name = $request->event_name;
        $event->event_desc = $request->event_desc;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->event_location = $request->event_location;
        // $event->event_image = $path;

        // return $event;
        
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
