<?php

class OnePageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('onepage.index');
	}

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function programme()
	{
		return View::make('onepage.programme');
	}


	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function hotel()
	{
		$hotels = Hotel::all();
		return View::make('onepage.hotel', compact('hotels'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('onepage.login');
	}

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::intended('/');
	}

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function dologin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), false))
		{
			if(User::admin()){
				return Redirect::action('AttendeeController@index');
			}else{
				return Redirect::action('RegisterController@create');
			}
		    
		}

		Auth::logout();
		Session::flash('message', 'Invalid credentials, please try again');
		Session::flash('class', 'alert alert-danger');
		return Redirect::back();
		
	}

}