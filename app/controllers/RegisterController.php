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
		$input = Input::all();

		$rules = array(
			'prefix' => 'required|integer',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'company' => 'required',
			'country' => 'required|integer');


		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			DB::transaction(function()
			{
				$attendee = new Attendee;
				$attendee->user_id = Auth::id();
				$attendee->prefix_id = Input::get('prefix');
				$attendee->first_name = Input::get('first_name');
				$attendee->last_name = Input::get('last_name');
				$attendee->prefered_name = Input::get('prefered_name');
				$attendee->email = Input::get('email');
				$attendee->mobile_phone = Input::get('mobile_phone');
				$attendee->assist_phone = Input::get('assist_phone');
				$attendee->alternative_email = Input::get('alternative_email');
				$attendee->company = Input::get('company');
				$attendee->address = Input::get('address');
				$attendee->job_title = Input::get('job_title');
				$attendee->country_id = Input::get('country');
				$attendee->special = Input::get('special');
				$attendee->withhotel = Input::get('withhotel');
				$attendee->hotel_id = Input::get('hotel');
				$attendee->room_type_id = Input::get('room_type');
				$attendee->billing = Input::get('billing');
				$attendee->with_arrival = Input::get('with_arrival');
				$attendee->arrival_carrier = Input::get('arrival_carrier');
				$attendee->arrival_no = Input::get('arrival_no');
				$attendee->arrival_date = date('Y-m-d',strtotime(Input::get('arrival_date')));
				$attendee->arrival_time = Input::get('arrival_time');
				$attendee->arrival_port = Input::get('arrival_port');
				$attendee->with_departure = Input::get('with_departure');
				$attendee->departure_carrier = Input::get('departure_carrier');
				$attendee->departure_no = Input::get('departure_no');
				$attendee->departure_date = date('Y-m-d',strtotime(Input::get('departure_date')));;
				$attendee->departure_time = Input::get('departure_time');
				$attendee->departure_port = Input::get('departure_port');
				$attendee->withparking = Input::get('withparking');
				$attendee->e_name = Input::get('e_name');
				$attendee->e_number = Input::get('e_number');
				$attendee->e_relationship = Input::get('e_relationship');
				$attendee->save();

				$night = Input::get('night');
				foreach ($night as $row) {
					DB::table('attendee_nights')->insert(array('attendee_id' => $attendee->id, 'available_night_id' => $row));
				}

				DB::table('users')->where('id', Auth::id())
					->update(array('registered' => 1));
			});
			return Redirect::action('OnePageController@index')
				->with('class', 'alert-info')
				->with('message', 'Registration complete, please check your email for confirmation.');
			
		}

		return Redirect::action('RegisterController@create')
			->withErrors($validation)
			->withInput()
			->with('class', 'alert-danger')
			->with('message', 'There were validation errors.');
	}



}