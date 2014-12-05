<?php

class AttendeeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /attendee
	 *
	 * @return Response
	 */
	public function index()
	{
		Input::flash();
		$attendees = User::getAttendee(Input::get('status'), Input::get('s'));
		return View::make('attendee.index', compact('attendees'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /attendee/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('attendee.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /attendee
	 *
	 * @return Response
	 */
	public function store()
	{
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();

		$validation = Validator::make($input, User::$rules);

		if($validation->passes())
		{
			$user = new User();
			$user->username = Input::get('email');
			$user->password = Hash::make('pptasia2015');
			$user->email = Input::get('email');
			$user->type = 2;
			$user->department = strtoupper(Input::get('department'));
			$user->designation = strtoupper(Input::get('designation'));
			$user->title = strtoupper(Input::get('title'));
			$user->first_name = strtoupper(Input::get('first_name'));
			$user->last_name = strtoupper(Input::get('last_name'));
			$user->save();

			return Redirect::route('attendee.index')
				->with('class', 'alert-success')
				->with('message', 'Attendee successfuly created.');
		}

		return Redirect::route('attendee.create')
			->withInput()
			->withErrors($validation)
			->with('class', 'alert-danger')
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 * GET /attendee/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /attendee/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /attendee/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /attendee/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function upload()
	{
		return View::make('attendee.upload');
	}

	public function doUpload(){
		// echo Input::file('file')->getFilename() .'<br>';
		// echo Input::file('file')->getClientOriginalName() .'<br>';
		// echo Input::file('file')->getRealPath() .'<br>';
		$file_path = Input::file('file')->move(__DIR__.'/storage/',Input::file('file')->getClientOriginalName());
		// return Input::file('file')->move(__DIR__.'/storage/',Input::file('file')->getClientOriginalName());

		Excel::load($file_path, function($reader) {
			User::batchInsert($reader->get());
		});
	}
}