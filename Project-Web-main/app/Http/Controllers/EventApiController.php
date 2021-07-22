<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();
        return response()->json(['message' => 'Success', 'data' => $events]);
    }
    /**
     * Display a listing of the resource.
     * Menapilkan semua data 
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $events = Event::where('title', 'like', '%' . $request->keyword . '%')->get();
        $result = $request->keyword;

        return response()->json(['message' => 'Success', 'result' => $result, 'data' => $events]);
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

        return response()->json(['message' => 'Success', 'category' => $event, 'data' => $events]);
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
        return response()->json(['message' => 'Success', 'data' => $event, 'user' => $user]);
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

        return response()->json(['message' => 'Success', 'user' => $user, 'count' => $count, 'data' => $events]);
    }
}
