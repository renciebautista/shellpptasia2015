<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoomTypeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('room_types')->truncate();

		DB::statement("INSERT INTO room_types (id, hotel_id, room_type, room_rate) VALUES
			(1, 1, 'Superior Deluxe King', 6500.00),
			(2, 1, 'Superior Deluxe Twin',  6500.00),
			(3, 1, 'Grand Deluxe', 6500.00),
			(4, 2, 'Park View Twin', 5124.00),
			(5, 2, 'Aqua Room', 5734.00),
			(6, 2, 'Bayview', 6344.00),
			(7, 2, 'Aqua Classic', 6954.00),
			(8, 2, 'Aqua Supreme', 7564.00),
			(9, 2, 'Club Bay', 8784.00),
			(10, 2, 'Club Jellies', 8784.00),
			(11, 2, 'Deluxe Suite', 11224.00),
			(12, 2, 'Premiere Suite', 12444.00);");
	}

}