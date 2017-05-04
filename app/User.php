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
    
    // now related to model:Timeslots & model:Bookings 
    public function timeslots() {
        
//        $user = App\User::find(1)->timeslots()->orderBy('id')->get();
//        $user = App\User::find($user_id);
//        $user->timeslots()->attach($timeslot_id);
        
//        foreach ($user->timeslots as $timeslot) {
//            echo $timeslot->pivot->year;
//        }
        
        return $this->belongsToMany('\App\Timeslots', 'bookings', 'user_id', 'timeslot_id')->withPivot('week', 'year')->withTimestamps();
    } 
    
//    public function scopePopular($query)
//        
//        {
//        return $query->where('votes', '>', 100);
//    }
//    
//     public function scopeActive($query)
//    {
//        return $query->where('active', 1);
//    }

}