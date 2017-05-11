<?php

namespace App;

use \App\Timeslots;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function timeslots() {
        
        return $this->belongsToMany('\App\Timeslots', 'bookings', 'user_id', 'timeslot_id')->withPivot('week', 'year')->withTimestamps();
    } 

}