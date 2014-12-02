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
				->orderBy('room_type')->lists('room_type', 'id');
			if(count($data)>0){
				array_unshift($data,"Please Select");
			}
			return Response::json($data,200);
		}
	}

	public function rate()
	{
		if(Request::ajax()){
			$data = RoomType::select('id', 'room_rate')
				->where('id',Input::get('room_type_id'))->first();

			return Response::json($data,200);
		}
	}
}