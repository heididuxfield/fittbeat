@extends('layouts.app')

@section('content')
<div class="form-placement" style="background-image: url('{{asset('assets/images/mount-top.jpg')}}')">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            <div class="panel-split-top panel-default">
                <div class="panel-body">
                   <h2>Login to Fittbeat</h2>
                    <form class="form-horizontal login-form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="remember-me">
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-lg login-btn grow">
                                    Login
                                </button>
                                
                                <a class="btn btn-link forgot-password grow" href="{{ url('/password/reset') }}">
                                    Forgot Your Password&#63;
                                </a>
                        </div><!-- end of form group -->
                    </form>
                </div>
            </div><!-- end of panel-split-top -->
            
            <div class="panel-split-bottom">
                            <p class="form-redirect-text">Not Registered&#63; Sign Up Today!</p>
                                
                            <a href="{{ url('/register') }}" type="button" class="btn btn-lg register-btn grow">Register</a>
            </div><!-- end of panel-split-bottom -->
        </div>
    </div>
</div>
</div><!-- end of form-placement -->
@endsection
