@extends('admin.layouts.app')

@section('content')
<div class="admin-home" style="background-image: url('{{asset('assets/images/mount-top.jpg')}}')">
<div class="container">
    <div class="row">
        <div class="col-md-12">
         <div class="admin-options-container">
          
           <h2>
           Welcome {{ Auth::guard('admins')->user()->name }}, 
           You are logged in!
           </h2>
           
           <div class="manage-bookings">
              <li>
                  <a href="{{ url('/admin/managebookings') }}">
                       <button class="btn btn-lg manage-bookings-btn grow">Manage Bookings</button> 
                   </a>
               </li>
           </div><!-- manage-bookings -->
           
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
         </div><!-- end of admin-home -->   
        </div> 
    </div>
</div>
</div><!-- end of admin-home -->
@endsection
