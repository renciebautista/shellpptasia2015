<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AttendeeStatusTableSeeder extends Seeder {

	public function run()
	{
		DB::table('attendee_statuses')->truncate();

		DB::statement("INSERT INTO attendee_statuses (id, status) VALUES
			(1, 'PENDING'),
			(2, 'REGISTERED'),
			(3, 'REGRETS');");
	}

}