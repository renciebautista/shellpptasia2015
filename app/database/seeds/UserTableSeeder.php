<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();
 
		$user = array(
		'username' => 'rencie',
		'email' => 'rbautista@chasetech.com',
		'password' => Hash::make('PPTAsia2015'),
		'created_at' => DB::raw('NOW()'),
		'updated_at' => DB::raw('NOW()'),
		);
		 
		// Uncomment the below to run the seeder
		DB::table('users')->insert($user);
	}

}