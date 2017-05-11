<?php

namespace App\Http\Controllers;

use Auth;
use \App\Timeslots;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeslotController extends Controller
{
    
    public function index() {
        
        $timeslots = Auth::user()->bookings;
        
        return view('userbookings', compact('timeslots'));
    }
    
    public function HandleBookings (Request $request) {
        
            
        $timeslot = Timeslots::find($request->poundsession);
            
        $date = Carbon::parse($request->date);
            
        if(!$request->poundsession) {
                return redirect('/bookingform')->with('error', 'You need to select a session');
            }

        if($timeslot->users()->count() >= 25){
                return redirect('/bookingform')->with('error', 'That session is overbooked');
            }
            
        $timeslot->users()->attach(Auth::user()->id, [
                'week' => $date->weekOfYear,
                'year' => $date->year
            ]);
        
        return redirect('userbookings');  
    }
    
}