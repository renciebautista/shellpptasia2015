<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();
		DB::table('attendees')->truncate();

 
		$admin = array(
		'username' => 'admin',
		'email' => 'admin@shellpptasia.com',
		'type' => 1,
		'test' => 1,
		'password' => Hash::make('admin031988'),
		'created_at' => DB::raw('NOW()'),
		'updated_at' => DB::raw('NOW()'),
		);
		 
		// Uncomment the below to run the seeder
		DB::table('users')->insert($admin);

		$attendee = array(
		'username' => 'rencie',
		'email' => 'rbautista@chasetech.com',
		'department' => 'CHASE TECHNOLOGIES CORPORATION',
		'designation' => 'PROGRAMMER',
		'title' => 'MR.',
		'first_name' => 'RENCIE',
		'last_name' => 'BAUTISTA',
		'type' => 2,
		'test' => 1,
		'code' => User::code(),
		'password' => Hash::make('manila2016'),
		'created_at' => DB::raw('NOW()'),
		'updated_at' => DB::raw('NOW()'),
		);
		 
		// Uncomment the below to run the seeder
		DB::table('users')->insert($attendee);
	}

}