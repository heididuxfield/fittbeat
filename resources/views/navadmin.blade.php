<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::to('/assets') }}/images/logo.png" alt="logo" width="50px" height="50px">
                     <h1>Fittbeat</h1>
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
                     <li><a href="{{ url('/admin/home') }}">Home</a></li>

                   @if (Auth::guard('admins')->user())
                       <li><a href="{{ url('/admin/managebookings') }}">Manage Bookings</a></li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::guard('admins')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                <a href="{{ url('/admin/logout') }}"
                               onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                            <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST"
                              style="display: none;">
                                {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/admin') }}">Login</a></li>
                        <li><a href="{{ url('/admin/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div><!-- end of app -->