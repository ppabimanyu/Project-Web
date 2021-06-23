<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'events' => Event::where('email', Auth::user()->email)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input');
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
            'title' => 'required',
            'category' => 'required',
            'time' => 'required',
            'date' => 'required',
            'platform' => 'required',
            'link' => 'required',
            'description' => 'required',
            'img' => 'Nullable'
        ]);

        Event::create([
            'email' => Auth::user()->email,
            'title' => $request->title,
            'category' => $request->category,
            'time' => $request->time,
            'date' => $request->date,
            'platform' => $request->platform,
            'link' => $request->link,
            'description' => $request->description,
            'img' => $request->img
        ]);

        // Event::create($request->all());

        return redirect('/dashboard')->with('status', 'New event created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('detail', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'time' => 'required',
            'date' => 'required',
            'platform' => 'required',
            'link' => 'required',
            'description' => 'required',
            'img' => 'Nullable'
        ]);
        
        Event::where('id', $event->id)
                ->update([
                    'title' => $request->title,
                    'category' => $request->category,
                    'time' => $request->time,
                    'date' => $request->date,
                    'platform' => $request->platform,
                    'description' => $request->description,
                    'link' => $request->link
                ]);
        return redirect('/dashboard')->with('status', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('/dashboard')->with('status', 'Event has been deleted');

    }
}
