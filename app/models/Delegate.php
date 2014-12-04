<?php

class Delegate extends \Eloquent {
	protected $fillable = ['department', 'designation', 'title', 'first_name', 'last_name', 'contact_numbers', 'address'];
	public $timestamps = false;

	public static function batchInsert($records){
		$records->each(function($row) {
			if(!is_null($row->email_1)){
				echo $row->email_1.'<br>';
				// $emails = explode(';', trim($row->email1));
				// foreach ($emails as $email) {
				// 	echo $email.'</br>';
				// 	// if(preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)){
				// 	// 	echo 'not valid email =>'.$email.'</br>';
				// 	// }else{
				// 	// 	// echo $email.'</br>';
				// 	// }
				// 	// $user = User::firstOrNew(array('email' => $email));
				// 	// $user->username = $email;
				// 	// $user->password = Hash::make($row->password);
				// 	// $user->email = $email;
				// 	// $user->save();
				// }
			}
    	});
	}
}