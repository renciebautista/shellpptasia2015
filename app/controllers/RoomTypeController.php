<?php

class RoomTypeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /roomtype
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Request::ajax()){
			$data = RoomType::select('id', 'room_type')
				->where('hotel_id',Input::get('hotel_id'))
				->orderBy('room_type')
				->get();
			if(count($data)>0){
				$data[0] = array('id' => 0, 'room_type' => 'Please Select');
			}
			return Response::json($data,200);
		}
	}

	public function rate()
	{
		if(Request::ajax()){
			$data = RoomType::select(DB::raw("id, CONCAT('PHP ',format(room_rate,2)) as room_rate"))
				->where('id',Input::get('room_type_id'))->first();

			return Response::json($data,200);
		}
	}

	public function show()
	{
		if(Request::ajax()){
			$attendee = Attendee::where('user_id', Auth::id())->first();
			if(!is_null($attendee)){
				$rate = RoomType::select(DB::raw("id, CONCAT('PHP ',format(room_rate,2)) as room_rate"))
				->where('id',$attendee->room_type_id)->first();

				$rooms = RoomType::select('id', 'room_type')
					->where('hotel_id',$attendee->hotel_id)
					->orderBy('room_type')
					->get();
				if(count($rooms)>0){
					$rooms[0] = array('id' => 0, 'room_type' => 'Please Select');
				}
				$data['rooms'] = $rooms;
				$data['selected'] = $attendee->room_type_id;
				$data['rate'] = $rate->room_rate;
				$data['error'] = false;
			}else{
				$data['error'] = true;
			}
			
			return Response::json($data,200);
		}
	}
}