<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $fillable = ['username' ,'email', 'title', 'department', 'designation', 'title', 'first_name', 'last_name', 'type', 'password'];
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public static $rules = array(
		'department' => 'required',
		'designation' => 'required',
		'title' => 'required',
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required|unique:users'

	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function registered(){
		$user = self::find(Auth::id());
		return ($user->registered == 2) ? true : false;
	}

	public static function admin(){
		$user = self::find(Auth::id());
		return ($user->type == 1) ? true : false;
	}
	public static function attendee(){
		$user = self::find(Auth::id());
		return ($user->type == 2) ? true : false;
	}

	public static function getAttendee($status,$filter){
		return self::join('attendee_statuses','users.registered','=','attendee_statuses.id')
			->where('type',2)
			->where(function($query) use ($status){
				if($status ==  2){
					$query->where('users.registered',2);
				}elseif($status == 3){
					$query->where('users.registered',1);
				}else{

				}
			})
			->where(function($query) use ($filter){
				$query->where('users.department', 'LIKE' ,"%$filter%")
					->orwhere('users.designation', 'LIKE' ,"%$filter%")
					->orwhere('users.first_name', 'LIKE' ,"%$filter%")
					->orwhere('users.last_name', 'LIKE' ,"%$filter%")
					->orwhere('users.email', 'LIKE' ,"%$filter%")
					->orwhere('users.title', 'LIKE' ,"%$filter%");
			})
			->get();
	}

	public static function batchInsert($records){
		$records->each(function($row) {
			if(!is_null($row->email)){
				$attributes = array(
					'username' => $row->email,
					'email' => $row->email,
					'department' => $row->department,
					'designation' => $row->designation,
					'title' => $row->title,
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'type' => 2,
					'password' => Hash::make('pptasia2015'));
				User::updateOrCreate($attributes, $attributes);
			}
			
    	});
	}
}
