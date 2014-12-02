<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoomTypeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('room_types')->truncate();

		DB::statement("INSERT INTO room_types (id, hotel_id, room_type, room_rate) VALUES
			(1, 1, 'STANDARD', 5000.00),
			(2, 1, 'PREMIER', 10000.00),
			(3, 2, 'REGULAR', 8000.00),
			(4, 2, 'SUITE', 10000.00);");
	}

}