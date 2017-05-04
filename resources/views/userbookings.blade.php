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
    <h3 style="margin-top:200px;">Thanks for booking {{ Auth::user()->name }}&#33; See you there&#33;</h3>

    
    <div class="return-to-website">
        <li>
            <a href="{{ url('/admin/logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            <button class="btn btn-lg admin-return-btn grow">Logout &amp; Return <br> to website</button> 
            </a>
            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </div><!-- end of return-to-website -->
    
    </body>
</html>

