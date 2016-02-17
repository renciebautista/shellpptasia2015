<?php

class AttendeeController extends \BaseController {

	public function index()
	{
		Input::flash();
		$attendees = User::getAttendee(Input::get('status'), Input::get('s'));
		return View::make('attendee.index', compact('attendees'));
	}

	public function create()
	{
		return View::make('attendee.create');
	}

	public function store()
	{
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();

		$rules = array(
			'department' => 'required',
			'designation' => 'required',
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:users'
		);

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$user = new User();
			$user->code = User::code();
			$user->username = Input::get('email');
			$user->password = Hash::make('manila2016');
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

	public function show($id)
	{	
		$user = User::where('id', $id)
				->where('registered',2)->first();
		$attendee = Attendee::where('user_id', $id)->first();
		if( (!is_null($attendee)) && (!is_null($user)) ){
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
			return View::make('attendee.show',$data);
		}else{
			return Redirect::route('attendee.index')
				->with('class', 'alert-danger')
				->with('message', 'Record not found.');
		}
		
	}

	public function edit($id)
	{
		$user = User::find($id);
		if(!is_null($user)){
			return View::make('attendee.edit',compact('user'));
		}else{
			return Redirect::route('attendee.index')
				->with('class', 'alert-danger')
				->with('message', 'Record not found.');
		}
	}

	public function update($id)
	{
		Input::merge(array_map('trim', Input::all()));
		$input = Input::all();

		$rules = array(
			'department' => 'required',
			'designation' => 'required',
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:users,email,'.$id
		);

		$validation = Validator::make($input, $rules);

		if($validation->passes())
		{
			$user = User::find($id);
			if(is_null($user)){
				return Redirect::route('attendee.index')
					->with('class', 'alert-danger')
					->with('message', 'Record does not exist.');
			}else{
				$user->username = Input::get('email');
				// $user->password = Hash::make('manila2016');
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
					->with('message', 'Attendee successfuly updated.');
			}
			
		}

		return Redirect::route('attendee.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('class', 'alert-danger')
			->with('message', 'There were validation errors.');
	}

	public function destroy($id)
	{
		$user = User::find($id);
		if (is_null($user))
		{
			$class = 'alert-danger';
			$message = 'Record does not exist.';
		}else{

			$attendee = Attendee::where('user_id',$user->id)->first();
			if(!is_null($attendee)){
				AttendeeNight::where('attendee_id', $attendee->id)->delete();
				Attendee::where('user_id',$user->id)->delete();
			}
			User::find($id)->delete();
			$class = 'alert-success';
			$message = 'Record successfully deleted.';
		}
		return Redirect::route('attendee.index')
				->with('class', $class )
				->with('message', $message);
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

		return Redirect::action('AttendeeController@index')
				->with('class', 'alert-info')
				->with('message', 'Attendee successfuly imported');
	}
}