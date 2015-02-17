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
		return DB::select(DB::raw("select attendees.code as idno, attendees.last_name as lastname, 
			attendees.first_name as firstname, prefered_name as nickname, 
		    job_title as titled, company as company, 
		    '1' as aread, '1' as schedule, '1' as seqno, '1' as tabled,
		    countries.full_name as countryd, 
			'1' as industryd, address as address1,'1' as address2,'1' as address3,
		    mobile_phone as telno, '1' as faxno,
		    attendees.email as email, '1' as website, '1' as bday, '1' as age, '1' as walkin 
		from attendees 
		left join countries on attendees.country_id = countries.id
        left join users on attendees.user_id = users.id
        where users.registered ='2'"));
	}
}