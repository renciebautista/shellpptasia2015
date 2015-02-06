<?php

class SettingsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /settings
	 *
	 * @return Response
	 */
	public function index()
	{
		$settings = Setting::find(1);
		// print_r($settings);
		return View::make('settings.index',compact('settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /settings/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /settings
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /settings/{id}
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
	 * GET /settings/{id}/edit
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
	 * PUT /settings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$setting = Setting::find($id);
		$setting->enable_cutoff = (Input::get('enable_cutoff') == 1) ? 1 : 0;
		$setting->cutoff = date('Y-m-d',strtotime(Input::get('cutoff')));
		$setting->update();

		

		return Redirect::route('settings.index')
			->with('class', 'alert-success')
			->with('message', 'Record successfuly updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /settings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}