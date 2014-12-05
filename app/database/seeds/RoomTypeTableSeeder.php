<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoomTypeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('room_types')->truncate();

		DB::statement("INSERT INTO room_types (id, hotel_id, room_type, room_rate) VALUES
			(1, 1, 'Grand/Superior Deluxe Room', 6800.00),
			(2, 1, 'Intramuros',  14585.00),
			(3, 1, 'Veranda', 14585.00),
			(4, 1, 'Luneta', 14585.00),
			(5, 1, 'Park Suites', 14585.00),
			(6, 1, 'Tower', 14585.00),
			(7, 1, 'Sunset', 14585.00),
			(8, 1, 'Sunrise Suites', 14585.00),
			(9, 1, 'Mac Arthur Suite', 90895.00),
			(10, 1, 'Presidential Suite', 90895.00),
			(11, 2, 'Park View Twin', 4800.00),
			(12, 2, 'Park View Queen', 4800.00),
			(13, 2, 'Aqua Room', 5300.00),
			(14, 2, 'Bayview Twin/Queen', 5800.00),
			(15, 2, 'Deluxe Suite', 8500.00),
			(16, 2, 'Premier Suite', 9500.00),
			(17, 2, 'Executive', 11000.00);");
	}

}