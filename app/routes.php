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

// Route::get('/', function()
// {

// 	// return View::make('hello');
// });

// Route::get('/', 'HomeController@index');
// Route::get('login', 'HomeController@create');
// Route::get('programme', 'HomeController@show');





Route::get('/login', 'OnePageController@login');
Route::get('/logout', 'OnePageController@logout');
Route::post('/login', 'OnePageController@dologin');
Route::get('/mail', function(){
	// return View::make('emails.registration.confirm');
	Mail::send('emails.registration.confirm', array('key' => 'value'), function($message)
	{
	    $message->to('rencie.bautista@yahoo.com', 'John Smith')->subject('Welcome!');
	});
});

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'OnePageController@index');
	Route::get('/programme', 'OnePageController@programme');
	Route::get('/hotel', 'OnePageController@hotel');

	Route::get('register', 'RegisterController@create');
	Route::post('register', 'RegisterController@store');

	Route::post('/api/rooms', 'RoomTypeController@index');
	Route::post('/api/roomrate', 'RoomTypeController@rate');
});
