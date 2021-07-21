<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seminars = Event::where('category', 'Seminar')->latest()->get();
        $healths = Event::where('category', 'Health')->latest()->get();
        $games = Event::where('category', 'Game')->latest()->get();
        $academics = Event::where('category', 'Education')->latest()->get();
        $others = Event::where('category', 'Other')->latest()->get();

        return view('index', compact('seminars', 'healths', 'games', 'academics', 'others'));
    }
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $events = Event::where('title', 'like', '%' . $request->keyword . '%')->get();

        return view('index_page', compact('events'));
    }
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function eventPage($event)
    {
        if ($event == "all") {
            $events = Event::latest()->get();
        } else {
            $events = Event::where('category', $event)->latest()->get();
        }

        return view('index_page', compact('events', 'event'));
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
        $events = Event::where('id_user', $event)->get();
        $count = Event::where('id_user', $event)->count();

        return view('view_profile', compact('user', 'events', 'count'));
    }
}
