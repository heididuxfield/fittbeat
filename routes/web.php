<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/bookingform', 'HomeController@index');


//Route::get('/unbook/{timeslot_id}/{user_id}', '');


//Route::get('/managebookings', function () {
//    
//    $timeslots = DB::table('timeslots')->get();
//    
//    return view('admin.managebookings', compact('timeslots'));
//    
//});

//Route::get('/managebookings', 'HomeController@index');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    
    Route::get('/managebookings', 'HomeController@manageBookings');
Route::post('/managebookings', 'HomeController@manageBookings');
    
//    Route::get('managebookings', 'HomeController@manageBookings');
    
    Route::get('home', 'HomeController@index');
});
Route::get('/userbookings', 'TimeslotController@index');
Route::get('/userbookings', 'TimeslotController@HandleBookings');
Route::post('/userbookings', 'TimeslotController@HandleBookings');

Route::get('/userbookings', 'TimeslotController@index');


