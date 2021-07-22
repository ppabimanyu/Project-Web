<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoleController extends Controller
{
        /**
     * Display a listing of the resource.
     * Menamplikan data sesuai email di dashboard
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role === 'admin'){
            return redirect()->route('admin');
        }else{
            return redirect()->route('dashboard');
        }
    }
}
