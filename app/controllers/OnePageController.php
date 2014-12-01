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
		return View::make('onepage.hotel');
	}

}