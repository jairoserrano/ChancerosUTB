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


Route::get('/authtest', array('before' => 'auth.basic'), function() {
    return View::make('hello');
});

Route::get('profile', function() {
    return Auth::user()->id;
});

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');
Route::resource('user', 'UserController');