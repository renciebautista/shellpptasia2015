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
		
		
		$setting = Setting::find(1);
		$today_dt = new DateTime(date("Y-m-d"));
		$expire_dt = new DateTime($setting->cutoff);

		if(($setting->enable_cutoff ==  1) && ($expire_dt < $today_dt)){
			return View::make('onepage.closed');
		}else{
			if(!User::regret()){
				$prefixes = Prefix::lists('prefix', 'id');
				$countries = Country::orderBy('name')->lists('name', 'id');
				$yesno = array('1' => 'YES', '2' => 'NO');
				$available_nights = AvailableNight::orderBy('available_night')->get();
				$hotels = Hotel::orderBy('name')->lists('name', 'id');
				if(User::registered()){
					$attendee = Attendee::getIdByUser(Auth::id());
					$nights = AttendeeNight::selected($attendee->id);
					return View::make('onepage.update', compact('prefixes', 'countries', 'yesno', 'available_nights', 'hotels', 'attendee', 'nights'));
				}else{
					return View::make('onepage.create', compact('prefixes', 'countries', 'yesno', 'available_nights', 'hotels'));
				}
			}else{
				return View::make('onepage.not');
			}
		}
		
		
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
			'prefix' => 'required|integer|min:1',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'company' => 'required',
			'country' => 'required|integer|min:1');


		$validation = Validator::make($input, $rules);

		$validation->sometimes(array('hotel', 'room_type'), 'required|integer|min:1', function($input){
			return (Input::get('withhotel') == 1) ? true : false;
		});
		$validation->sometimes('night', 'required', function($input){
			return (Input::get('withhotel') == 1) ? true : false;
		});
		$validation->sometimes(array('arrival_carrier', 'arrival_no', 'arrival_date', 'arrival_time', 'arrival_port'), 'required', function($input){
			return (Input::get('with_arrival') == 1) ? true : false;
		});
		$validation->sometimes(array('departure_carrier', 'departure_no', 'departure_date', 'departure_time', 'departure_port'), 'required', function($input){
			return (Input::get('with_departure') == 1) ? true : false;
		});

		if($validation->passes())
		{

			$attendee = DB::transaction(function() 
			{
				$update = true;
				$attendee = Attendee::where('user_id',  Auth::id())->first();
				if(empty($attendee)){
					$attendee = new Attendee;
					$update = false;
				}

				$attendee->user_id = Auth::id();
				$attendee->code = Attendee::code();
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
				if($attendee->withhotel == 1){
					$attendee->hotel_id = Input::get('hotel');
					$attendee->room_type_id = Input::get('room_type');
				}else{
					$attendee->hotel_id = null;
					$attendee->room_type_id = null;
				}
				$attendee->billing = Input::get('billing');

				$attendee->with_arrival = Input::get('with_arrival');
				if($attendee->with_arrival == 1){
					$attendee->arrival_carrier = Input::get('arrival_carrier');
					$attendee->arrival_no = Input::get('arrival_no');
					$attendee->arrival_date = date('Y-m-d',strtotime(Input::get('arrival_date')));
					$attendee->arrival_time = Input::get('arrival_time');
					$attendee->arrival_port = Input::get('arrival_port');
				}else{
					$attendee->arrival_carrier = null;
					$attendee->arrival_no = null;
					$attendee->arrival_date = null;
					$attendee->arrival_time = null;
					$attendee->arrival_port = null;
				}
				
				$attendee->with_departure = Input::get('with_departure');
				if($attendee->with_departure == 1){
					$attendee->departure_carrier = Input::get('departure_carrier');
					$attendee->departure_no = Input::get('departure_no');
					$attendee->departure_date = date('Y-m-d',strtotime(Input::get('departure_date')));;
					$attendee->departure_time = Input::get('departure_time');
					$attendee->departure_port = Input::get('departure_port');
				}else{
					$attendee->departure_carrier = null;
					$attendee->departure_no = null;
					$attendee->departure_date = null;
					$attendee->departure_time = null;
					$attendee->departure_port = null;
				}
				
				$attendee->withparking = Input::get('withparking');
				$attendee->plate_no = Input::get('plate');

				$attendee->e_name = Input::get('e_name');
				$attendee->e_number = Input::get('e_number');
				$attendee->e_relationship = Input::get('e_relationship');

				if($update){
					$attendee->update();
				}else{
					$attendee->save();
				}

				

				$night = Input::get('night');
				if((!empty($night)) && ($attendee->withhotel == 1)){
					foreach ($night as $row) {
						DB::table('attendee_nights')->insert(array('attendee_id' => $attendee->id, 'available_night_id' => $row));
					}
				}
				

				DB::table('users')->where('id', Auth::id())
					->update(array('registered' => 2));

				DNS1D::getBarcodePNGPath($attendee->code, "C39",2,60);
				
				$data['pathToFile'] = 'http://www.shellpptasia.com/barcode/'.$attendee->code.'.png';
				$data['attendee'] = $attendee;
				$data['prefix'] = Prefix::find($attendee->prefix_id);
				$data['country'] = Country::find($attendee->country_id);
				if($attendee->withhotel == 1){
					$data['hotel'] = Hotel::find($attendee->hotel_id);
					$data['room'] = RoomType::select(DB::raw("room_type, CONCAT('PHP ',format(room_rate,2)) as room_rate"))
								->where('id',$attendee->room_type_id)->first();
					$data['nights'] = AttendeeNight::where('attendee_id',$attendee->id)
						->join('available_nights','attendee_nights.available_night_id','=','available_nights.id')
						->get();
				}
				
				Mail::send('emails.registration.confirm', $data, function($message) use ($attendee)
				{
				    $message->to($attendee->email)
				    	->subject('Registration Confirmation (Shell Powering Progress Together Asia 2016)');
				});

				return $attendee;
			});

			$prefix = Prefix::find($attendee->prefix_id);
			return Redirect::action('OnePageController@index')
				->with('class', 'alert-info')
				->with('message', 'Welcome to Shell Powering Progress Together Asia 2016, '.$prefix->prefix .' '.ucwords(strtolower($attendee->first_name)).' '.ucwords(strtolower($attendee->last_name)).'. Your registration is complete. Please check your email for your confirmation code.');
			
		}

		return Redirect::action('RegisterController@create')
			->withErrors($validation)
			->withInput()
			->with('class', 'alert-danger')
			->with('message', 'There were validation errors.');
	}

	public function update()
	{	
		$attendee = Attendee::find(Input::get('at_id'));
		if (is_null($attendee))
		{
			return Redirect::action('OnePageController@logout');
		}


		$input = Input::all();

		$rules = array(
			'prefix' => 'required|integer|min:1',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'company' => 'required',
			'country' => 'required|integer|min:1');


		$validation = Validator::make($input, $rules);

		$validation->sometimes(array('hotel', 'room_type'), 'required|integer|min:1', function($input){
			return (Input::get('withhotel') == 1) ? true : false;
		});
		$validation->sometimes('night', 'required', function($input){
			return (Input::get('withhotel') == 1) ? true : false;
		});
		$validation->sometimes(array('arrival_carrier', 'arrival_no', 'arrival_date', 'arrival_time', 'arrival_port'), 'required', function($input){
			return (Input::get('with_arrival') == 1) ? true : false;
		});
		$validation->sometimes(array('departure_carrier', 'departure_no', 'departure_date', 'departure_time', 'departure_port'), 'required', function($input){
			return (Input::get('with_departure') == 1) ? true : false;
		});

		if($validation->passes())
		{
			DB::transaction(function() use ($attendee)
			{
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
				if($attendee->withhotel == 1){
					$attendee->hotel_id = Input::get('hotel');
					$attendee->room_type_id = Input::get('room_type');
				}else{
					$attendee->hotel_id = null;
					$attendee->room_type_id = null;
				}
				
				$attendee->billing = Input::get('billing');

				$attendee->with_arrival = Input::get('with_arrival');
				if($attendee->with_arrival == 1){
					$attendee->arrival_carrier = Input::get('arrival_carrier');
					$attendee->arrival_no = Input::get('arrival_no');
					$attendee->arrival_date = date('Y-m-d',strtotime(Input::get('arrival_date')));
					$attendee->arrival_time = Input::get('arrival_time');
					$attendee->arrival_port = Input::get('arrival_port');
				}else{
					$attendee->arrival_carrier = null;
					$attendee->arrival_no = null;
					$attendee->arrival_date = null;
					$attendee->arrival_time = null;
					$attendee->arrival_port = null;
				}
				
				$attendee->with_departure = Input::get('with_departure');
				if($attendee->with_departure == 1){
					$attendee->departure_carrier = Input::get('departure_carrier');
					$attendee->departure_no = Input::get('departure_no');
					$attendee->departure_date = date('Y-m-d',strtotime(Input::get('departure_date')));;
					$attendee->departure_time = Input::get('departure_time');
					$attendee->departure_port = Input::get('departure_port');
				}else{
					$attendee->departure_carrier = null;
					$attendee->departure_no = null;
					$attendee->departure_date = null;
					$attendee->departure_time = null;
					$attendee->departure_port = null;
				}
				
				$attendee->withparking = Input::get('withparking');
				// dd(Input::get('withparking'))
				if($attendee->withparking == 1){
					$attendee->plate_no = Input::get('plate');
				}else{
					$attendee->plate_no = '';
				}
				
				$attendee->e_name = Input::get('e_name');
				$attendee->e_number = Input::get('e_number');
				$attendee->e_relationship = Input::get('e_relationship');
				$attendee->save();

				$night = Input::get('night');

				DB::table('attendee_nights')->where('attendee_id', '=', $attendee->id)->delete();
				if((!empty($night)) && ($attendee->withhotel == 1)){
					
					foreach ($night as $row) {
						DB::table('attendee_nights')->insert(array('attendee_id' => $attendee->id, 'available_night_id' => $row));
					}
				}
				
			});

			$prefix = Prefix::find($attendee->prefix_id);
			return Redirect::action('RegisterController@create')
				->with('class', 'alert-info')
				->with('message', 'Your information was successfully updated.');
			
		}

		return Redirect::action('RegisterController@create')
			->withErrors($validation)
			->withInput()
			->with('class', 'alert-danger')
			->with('message', 'There were validation errors.');
	}

}