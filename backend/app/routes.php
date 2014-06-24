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
  //  return Auth::user()->email;
     return View::make('index');
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('user', 'UserController');

Route::get('registervehicle', 'VehicleController@create')->before('auth');
Route::get('vehiclelist', 'VehicleController@index')->before('auth');
Route::resource('vehicle', 'VehicleController');

Route::get('registerchance', 'ChanceController@create');//->before('auth');
Route::resource('chance', 'ChanceController');