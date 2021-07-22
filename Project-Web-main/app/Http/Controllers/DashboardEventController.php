<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menamplikan data sesuai email di dashboard
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard', [
            'events' => Event::where('id_user', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * Mengarahkan ke view input
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.input');
    }

    /**
     * Store a newly created resource in storage.
     * Input data ke database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:36',
            'category' => 'required',
            'time' => 'required',
            'date' => 'required',
            'platform' => 'required',
            'link' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $imageName = time()."-".uniqid()."-".$request->img->getClientOriginalName();   
        $request->img->move(public_path('/storage/images'), $imageName);

        Event::create([
            'id_user' => Auth::user()->id,
            'title' => $request->title,
            'category' => $request->category,
            'time' => $request->time,
            'date' => $request->date,
            'platform' => $request->platform,
            'link' => $request->link,
            'description' => $request->description,
            'img' => $imageName
        ]);

        // Event::create($request->all());

        return redirect('/dashboard')->with('status', 'Event '.$request->title.' created successfully');
    }

    /**
     * Display the specified resource.
     * Menampilkan detail di dashboard
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('dashboard.detail', compact('event'));
    }

   /**
     * Show the form for editing the specified resource.
     * Mengarahkan ke view edit
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     * Menimpa data lama dengan data baru
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|max:36',
            'category' => 'required',
            'time' => 'required',
            'date' => 'required',
            'platform' => 'required',
            'link' => 'required',
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240|Nullable'
        ]);

        // Jika upload file baru, file lama yang digunakan
        if(($request->img) !== null){
            if(File::exists(public_path('storage/images/'.$event->img))){
                File::delete(public_path('storage/images/'.$event->img));}
            $imageName = time()."-".uniqid()."-".$request->img->getClientOriginalName();         
            $request->img->move(public_path('/storage/images'), $imageName);}
        else{$imageName = $event->img;}
      
        Event::where('id', $event->id)
                ->update([
                    'title' => $request->title,
                    'category' => $request->category,
                    'time' => $request->time,
                    'date' => $request->date,
                    'platform' => $request->platform,
                    'description' => $request->description,
                    'link' => $request->link,
                    'img' => $imageName
                ]);
        return redirect('/dashboard')->with('status', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus data di database sesuai id
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if(File::exists(public_path('storage/images/'.$event->img))){
            File::delete(public_path('storage/images/'.$event->img));
        }else{
            dd('File does not exists.');
        }
        Event::destroy($event->id);

        return redirect('/dashboard')->with('status', 'Event has been deleted');

    }
}
