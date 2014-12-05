<?php

class AttendeeNight extends \Eloquent {
	protected $fillable = [];

	public static function selected($attendee){
		$nights = self::where('attendee_id', $attendee)->get();
		$data = array();
		foreach ($nights as $key => $value) {
			$data[] = $value->available_night_id;
		}

		return $data;
	}

}