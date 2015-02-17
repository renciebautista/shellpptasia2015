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

	public static function getAttendee(){
		return DB::select(DB::raw("select code as idno, last_name as lastname, 
			first_name as firstname, prefered_name as nickname, 
		    job_title as titled, company as company, 
		    ' ' as aread, ' ' as schedule, ' ' as seqno, ' ' as tabled,
		    countries.full_name as countryd, 
			' ' as industryd, address as address1,' ' as address2,' ' as address3,
		    mobile_phone as telno, ' ' as faxno,
		    email as email, ' ' as website, ' ' as bday, ' ' as age, ' ' as walkin 
		from attendees 
		inner join countries on attendees.country_id = countries.id"));
	}
}