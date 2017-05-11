@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
           
            <div class="admin-manage-bookings-container">
                <h2>View your poundfit sessions</h2>
                <h3>This weeks bookings:</h3>
            </div><!-- end of admin-manage-bookings-container -->
            
            <div class="pound-session-container">
               @foreach($data as $thing)
                   <div class="timeslot">
                       <div class="pound-session-label">{{ $thing['timeslot']->day }} {{ $thing['timeslot']->from }}-{{ $thing['timeslot']->to }}</div>
                       <ul class="pound-session-users">
                           @forelse($thing['users'] as $user)
                           <li class="pound-session-user">{{ $user->name }}</li>
                           @empty
                               <li id="nobody-booked">Nobody has booked yet</li>
                           @endforelse
                       </ul>
                   </div>
               @endforeach
                </div><!-- end of pound-session-container -->
                            
        </div><!-- end of col-sm-10 -->
    </div><!-- end of row -->
</div><!-- end of container-fluid --> 
@endsection