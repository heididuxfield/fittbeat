<?php

namespace App\Http\Controllers;

use \App\Timeslots;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* if submitting anything else to this controller use 'except' */
//        $this->middleware('auth', ['except' => 'handleSubmit']);
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeslots = Timeslots::all();
            
        return view('bookingform', compact ('timeslots'));
        
    } 
}
