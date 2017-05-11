<?php

namespace App\Http\Controllers\Admin;

use App\Timeslots;
use App\Http\Controllers\Controller;
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
        $this->middleware('auth.admin', ['except' => 'manageBookings']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }
    
    public function manageBookings()
    {
        $date = Carbon::now();
        
        $timeslots = Timeslots::all();
        
        $data = [];
        
        foreach($timeslots as $timeslot) {
            $users = $timeslot->users()
                ->where('bookings.week', $date->weekOfYear)
                ->get();
            
            $data[] = [
                'timeslot' => $timeslot,
                'users' => $users
            ];
        }

        return view('admin.managebookings', compact('data'));
    } 
    
}
