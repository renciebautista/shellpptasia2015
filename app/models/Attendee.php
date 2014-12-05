<?php

class Attendee extends \Eloquent {
	protected $fillable = [];

	public static function getIdByUser($user_id){
		return self::where('user_id',$user_id)
			->first();
	}

	public static function code(){
		$code = strtoupper(Str::random(10));

		$_code = self::where('code',$code)->first();
		if(count($_code) == 0){
			return $code;
		}else{
			self::code();
		}
		
	}
}