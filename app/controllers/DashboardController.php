<?php

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
		$attending = User::where('type',2)
				->where('registered',2)
				->count();

		$pending = User::where('type',2)
				->where('registered',1)
				->count();

		$regrets = User::where('type',2)
				->where('registered',3)
				->count();
		return View::make('dashboard.index',compact('attending', 'pending', 'regrets'));
	}


}