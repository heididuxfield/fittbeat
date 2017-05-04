<?php

namespace App;
use \App\User;
use Illuminate\Database\Eloquent\Model;

class Timeslots extends Model
{
    protected $fillable = [
        'day', 'from', 'to', 'where'
    ];

// now related to model:User & model:Bookings  
public function users() {
    
            return $this->belongsToMany('\App\User', 'bookings', 'timeslot_id', 'user_id')->withPivot('week', 'year')->withTimestamps();
}

    
}
