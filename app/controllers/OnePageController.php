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

	public function overview(){
		return View::make('onepage.overview');
	}

	/**
	 * Display a listing of the resource.
	 * GET /onepage
	 *
	 * @return Response
	 */
	public function programme()
	{
		return View::make('onepage.programme2');
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
		return Redirect::action('OnePageController@login')
				->with('class', 'alert-info')
				->with('message', 'You have successfully logged out.');
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
				return Redirect::action('DashboardController@index');
			}else{
				return Redirect::action('RegisterController@create');
			}
		    
		}

		Auth::logout();
		Session::flash('message', 'Invalid credentials, please try again');
		Session::flash('class', 'alert alert-danger');
		return Redirect::back();
		
	}

	public function regret($id)
	{
		$user = User::where('code',$id)
			->where('registered', 1)
			->first();
		if(is_null($user)){
			return View::make('onepage.notfound');
		}else{
			$user->registered = 3;
			$user->save();
			return View::make('onepage.regretconfirm');
		}
	}
}