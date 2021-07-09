<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'events' => Event::latest()->get()
        ]);
    }

    /**
     * Display the specified resource.
     * Menampilkan detail
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $user = DB::table('users')->where('id', $event->id_user)->first();
        return view('index-details', compact('event', 'user'));
    }

    /**
     * Display the specified resource.
     * Menampilkan detail
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function viewProfile($event)
    {
        $user = DB::table('users')->where('id', $event)->first();
        $events = Event::where('id_user',$event)->get();
        $count = Event::where('id_user',$event)->count();

        return view('view_profile', compact('user', 'events', 'count'));
    }
}
