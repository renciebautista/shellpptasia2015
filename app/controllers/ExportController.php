<?php

class ExportController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /export
	 *
	 * @return Response
	 */
	public function index()
	{
		Input::flash();
		$attendees = User::getBatch();
		return View::make('export.index', compact('attendees'));
	}

	public function exportlist()
	{
		$dates = Input::get('date');
		$user = User::getExport($dates);
		Excel::create('Attendee_'.date('Ymd'), function($excel) use($user){
			$excel->sheet('Attendee', function($sheet) use($user) {
				$sheet->fromModel($user);
			});

		})->export('xls');
	}

	public function gms()
	{
		$attendees = Attendee::getAttendee();
		$data = json_decode(json_encode((array) $attendees), true);
		// print_r($data);
		Excel::create('Attendee_'.date('Ymd'), function($excel) use($data){
			$excel->sheet('Attendee', function($sheet) use($data) {
				$sheet->fromArray($data);
			});

		})->export('xls');
	}
}