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

// Route::post('register', 'RegisterController@store');
// Route::get('register', 'RegisterController@create');

Route::get('/', 'OnePageController@index');
Route::get('/programme', 'OnePageController@programme');
Route::get('/hotel', 'OnePageController@hotel');
