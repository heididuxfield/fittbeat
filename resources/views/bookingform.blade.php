<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fittbeat</title>

        <!-- Fonts -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!-- Bootstrap -->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
            <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">

</head>
    <body>
      
       @include('nav')
       
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

       </div>
          
<div class="booking-container"> 
    <div class="form-placement" style="background-image: url('{{asset('assets/images/mount-top.jpg')}}')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                           <h2>Make a Booking</h2>
                            <form class="form-horizontal registration-form" role="form" method="POST" action="{{ url('/userbookings') }}">
                                {{ csrf_field() }}
                                
                                <h3 class="select-class-text">Please select the class you wish to attend</h3>
                                
                                <div class="pound-session-container">
                                
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        @if(session('error'))
                                        <div class="alert alert-danger">
                                            <i class="fa fa-exclamation-triangle"></i>
                                            {{ session('error') }}
                                        </div>
                                        @endif

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        
                                        <h2>239 SH2 Bethlehem Hall Tauranga</h2>
                                        <label>
                                        <input type="radio" name="poundsession" value="1" {{ $timeslots[0]->users()->count() >= 25 ? 'disabled' : '' }}>  
                                        <span>Monday Evening 6:00 &#45; 6:45 pm</span><br>
                                        </label>
                                        <label>
                                    <input type="radio" name="poundsession" value="2" {{ $timeslots[1]->users()->count() >= 25 ? 'disabled' : '' }}>
                                       <span>Wednesday Evening 6:00 &#45; 6:45 pm</span><br>
                                        </label>
                                        <h2>Aspire Health &amp; Sports Tauranga</h2>
                                        <label>
                                    <input type="radio" name="poundsession" value="3" {{ $timeslots[2]->users()->count() >= 25 ? 'disabled' : '' }}>
                                    <span>Wednesday Morning 6:00 &#45; 7:30 am</span><br>
                                    </label>
                                    <label>
                                    <input type="radio" name="poundsession" value="4" {{ $timeslots[3]->users()->count() >= 25 ? 'disabled' : '' }}>
                                    <span>Friday Evening 6:00 &#45; 6:45 pm</span><br>
                                    </label>
                                    <label>
                                    <input type="radio" name="poundsession" value="5" {{ $timeslots[4]->users()->count() >= 25 ? 'disabled' : '' }}>
                                    <span>Saturday Morning 7:30 &#45; 8:15 am</span>
                                    </label>

                                </div> 
                                            
                                <h3 class="select-week-text">Please select the week</h3>
                                
                                <!-- --- Week Selector --- -->
                                <select name="date" class="date-selector" id="">
                                    <option value="{{ Carbon\Carbon::now()->startOfWeek() }}">
                                        This week
                                    </option>
                                    <option value="{{ Carbon\Carbon::now()->addDays(7)->startOfWeek() }}">
                                        Next week
                                    </option>
                                    <option value="{{ Carbon\Carbon::now()->addDays(7*2)->startOfWeek() }}">
                                        Week starting at {{ Carbon\Carbon::now()->addDays(7*2)->startOfWeek()->toFormattedDateString() }}
                                    </option>
                                    <option value="{{ Carbon\Carbon::now()->addDays(7*3)->startOfWeek() }}">
                                        Week starting at {{ Carbon\Carbon::now()->addDays(7*3)->startOfWeek()->toFormattedDateString() }}
                                    </option>
                                </select>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg book-btn">
                                       Book now
                                    </button>
                                </div>
                                </div><!-- end of pound-session-container -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of form-placement --> 

</div><!-- end of booking -->         
    </body>
</html>

