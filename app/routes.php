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





Route::get('login', 'OnePageController@login');
Route::get('logout', 'OnePageController@logout');
Route::post('login', 'OnePageController@dologin');

Route::get('mail/{name?}', function($name = 'John'){
	
	DNS1D::getBarcodePNGPath($name, "C39",2,60);
	// $pathToFile = 'http://localhost:8000/barcode/'.$name.'.png';
	// return View::make('emails.registration.confirm',compact('pathToFile'));
	Mail::send('emails.registration.confirm', array('pathToFile' => 'http://www.shellpptasia.com/barcode/'.$name.'.png'), function($message)
	{
	    $message->to('rencie.bautista@yahoo.com', 'Rencie Bautista')->subject('Registration Confirmation (Shell Powering Progress Together Asia 2015)');
	});
});

Route::get('import/delegates', 'ImportController@delegates');

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'OnePageController@index');
	Route::get('programme', 'OnePageController@programme');
	Route::get('hotel', 'OnePageController@hotel');

	Route::get('register', 'RegisterController@create');
	Route::post('register', 'RegisterController@store');

	Route::post('api/rooms', 'RoomTypeController@index');
	Route::post('api/roomrate', 'RoomTypeController@rate');
});
