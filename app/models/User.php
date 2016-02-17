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

	public static function regret(){
		return false;
		// $user = self::find(Auth::id());
		// return ($user->registered == 3) ? true : false;
	}

	public static function getAttendee($status,$filter){
		return self::select('users.id as user_id','users.email', 'users.department', 'users.designation', 'users.updated_at',
			'users.title', 'users.first_name', 'users.last_name', 'users.registered', 'attendee_statuses.*', 'users.created_at')
			->join('attendee_statuses','users.registered','=','attendee_statuses.id')
			->where('type',2)
			->where(function($query) use ($status){
				if($status ==  2){
					$query->where('users.registered',2);
				}elseif($status == 3){
					$query->where('users.registered',1);
				}elseif($status == 4){
					$query->where('users.registered',3);
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
			})->orderBy('created_at','desc')
			->get();
	}

	public static function batchInsert($records){
		$records->each(function($row) {
			if(!is_null($row->email)){
				$user = User::where('email',$row->email)->first();
				if(is_null($user)){
					$designation = '';
					if($row->designation == ''){
						$designation = $row->designation;
					}

					$attributes = array(
						'username' => $row->email,
						'email' => $row->email,
						'department' => $row->department,
						'designation' => $row->designation,
						'title' => $row->title,
						'first_name' => $row->first_name,
						'last_name' => $row->last_name,
						'type' => 2,
						'code' => self::code(),
						'password' => Hash::make('manila2016'),
						'test' => $row->test,
						'created_at' => DB::raw('NOW()'),
						'updated_at' => DB::raw('NOW()'));
					User::insert($attributes);
				}
				
			}
			
    	});
	}

	public static function code(){
		$code = strtolower(Str::random(10));

		$_code = self::where('code',$code)->first();
		if(count($_code) == 0){
			return $code;
		}else{
			self::code();
		}
		
	}

	public static function getExport($dates){
		return self::select('department', 'designation', 'title', 'users.first_name', 'users.last_name', 'users.email', 
			DB::raw("CONCAT('www.shellpptasia.com/regret/',users.code) as link"))
			->where('type',2)
			->where(function($query) use ($dates){
				$query->whereIn(DB::raw('DATE(updated_at)'),$dates);
			})
			->get();
	}

	public static function getBatch(){
		return DB::select('SELECT DATE(updated_at) date_only FROM users GROUP BY date_only');
	}
}
