<?php

class RegisterController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 * GET /register/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$prefixes = Prefix::orderBy('prefix')->lists('prefix', 'id');
		$countries = Country::orderBy('name')->lists('name', 'id');
		$yesno = array('1' => 'YES', '2' => 'NO');
		$available_nights = AvailableNight::all();
		$hotels = Hotel::orderBy('name')->lists('name', 'id');
		return View::make('onepage.create', compact('prefixes', 'countries', 'yesno', 'available_nights', 'hotels'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /register
	 *
	 * @return Response
	 */
	public function store()
	{
		return Redirect::action('RegisterController@create');
	}



}