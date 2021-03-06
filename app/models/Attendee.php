<?php

class Attendee extends \Eloquent {
	protected $fillable = [];

	public static function getIdByUser($user_id){
		return self::where('user_id',$user_id)
			->first();
	}

	public static function code(){
		$code = strtoupper(Str::random(8));

		$_code = self::where('code',$code)->first();
		if(count($_code) == 0){
			return $code;
		}else{
			self::code();
		}
		
	}

		/**
	 * Display a listing of the resource.
	 * GET /attendee
	 *
	 * @return Response
	 */
	public static function getConfirmedAttendee(){
		return DB::select(DB::raw("select attendees.code as idno, attendees.last_name as lastname, 
			attendees.first_name as firstname, prefered_name as nickname, 
		    job_title as titled, company as company, 
		    '' as aread, '' as schedule, '' as seqno, '' as tabled,
		    countries.full_name as countryd, 
			'' as industryd, address as address,'' as address2,'' as address3,
		    mobile_phone as telno, '' as faxno,
		    attendees.email as email, '' as website, '' as bday, '' as age, '' as walkin 
		from attendees 
		left join countries on attendees.country_id = countries.id
        left join users on attendees.user_id = users.id
        where users.registered ='2'"));
	}

	public static function getPendingAttendee(){
		return DB::select(DB::raw("select '' as idno, users.last_name as lastname,
			users.first_name as firstname, '' as nickname,
			designation as titled,
			department as company,
			'' as aread, '' as schedule, '' as seqno, '' as tabled,
			'' as countryd, 
			'' as industryd, '' as address,'' as address2,'' as address3,
			'' as telno, '' as faxno,
			email, '' as website, '' as bday, '' as age, '' as walkin 
			from users
			where registered = 1
			and type = 2"));
	}
}