<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">         
                     <img src="{{ URL::to('/assets') }}/images/logo.png" alt="logo" width="50px" height="50px">
                     <h1>Fittbeat</h1>
<!--                         {{ config('app.name', 'Laravel') }}-->
                </a>
            </div><!-- end of navbar-header -->

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/') }}">Home</a></li>

                    <li><a href="{{ url('/#contact-nav') }}">Contact</a></li>
                    
                    @if (Auth::user())
                        <li><a href="{{ url('/bookingform') }}">Make Booking</a></li>
<!--                        <li><a href="{{ url('/userbookings') }}">My Bookings</a></li>-->
                    @endif

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li> 
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>    
        @yield('content')
        
</div><!-- end of app -->