<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */


Route::get('/', 'SessionsController@create');

Route::get('profile', function() {
    //return Auth::user()->email;
     $vehicle = DB::table('vehicles')->where('users_id', '=', Auth::user()->id)->get();
    return View::make('users.profile')->with('vehicles', $vehicle);
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('user', 'UserController');

Route::get('registervehicle', 'VehicleController@create')->before('auth');
Route::get('vehiclelist', 'VehicleController@index')->before('auth');
Route::resource('vehicle', 'VehicleController');

Route::get('chanceslist', 'ChanceController@index')->before('auth');
Route::get('registerchance', 'ChanceController@create')->before('auth');
Route::resource('chance', 'ChanceController');

Route::resource('usersofchance', 'UsersofChanceController');

Route::resource('comments', 'CommentsController');
Route::resource('rated', 'RatedController');