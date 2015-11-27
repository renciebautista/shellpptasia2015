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

Route::get('/test', function()
{
	echo strtoupper(Str::random(8));
	// return View::make('onepage.regretconfirm');
});

// Route::get('/', 'HomeController@index');
// Route::get('login', 'HomeController@create');
// Route::get('programme', 'HomeController@show');




Route::get('regret/{id}', 'OnePageController@regret');
Route::post('regret/{id}', 'OnePageController@doregret');
Route::get('login', 'OnePageController@login');
Route::get('logout', 'OnePageController@logout');
Route::post('login', 'OnePageController@dologin');

// Route::get('mail/{name?}', function($name = 'John'){
	
// 	DNS1D::getBarcodePNGPath($name, "C39",2,60);
// 	// $pathToFile = 'http://localhost:8000/barcode/'.$name.'.png';
// 	// return View::make('emails.registration.confirm',compact('pathToFile'));
// 	$data['pathToFile'] = 'http://www.shellpptasia.com/barcode/'.$name.'.png';
// 	Mail::send('emails.registration.confirm', $data, function($message)
// 	{
// 	    $message->to('rencie.bautista@yahoo.com', 'Rencie Bautista')->subject('Registration Confirmation (Shell Powering Progress Together Asia 2015)');
// 	});
// });

// Route::get('import/delegates', 'ImportController@delegates');

Route::group(array('before' => 'auth'), function()
{	
	Route::group(array('before' => 'attendee'), function(){
		Route::get('/', 'OnePageController@index');
		Route::get('overview', 'OnePageController@overview');
		Route::get('programme', 'OnePageController@programme');
		Route::get('hotel', 'OnePageController@hotel');

		Route::get('register', 'RegisterController@create');
		Route::post('register', 'RegisterController@store');
		Route::put('register', 'RegisterController@update');

		Route::post('api/rooms', 'RoomTypeController@index');
		Route::get('api/rooms', 'RoomTypeController@show');
		Route::post('api/roomrate', 'RoomTypeController@rate');
	});

	Route::group(array('before' => 'admin'), function(){
		Route::resource('dashboard', 'DashboardController');
		Route::get('attendee/upload', 'AttendeeController@upload');
		Route::post('attendee/upload', 'AttendeeController@doUpload');
		Route::get('attendee/export', 'ExportController@index');
		Route::post('attendee/export', 'ExportController@exportlist');
		Route::get('attendee/gms', 'ExportController@gms');
		Route::resource('attendee', 'AttendeeController');
		Route::resource('settings', 'SettingsController');
	});
	
});

