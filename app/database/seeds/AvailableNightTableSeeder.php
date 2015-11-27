<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AvailableNightTableSeeder extends Seeder {

	public function run()
	{
		DB::table('available_nights')->truncate();

		DB::statement("INSERT INTO available_nights (id, available_night) VALUES
			(1, '2016-03-02'),
			(2, '2016-03-03'),
			(3, '2016-03-04'),
			(4, '2016-03-05');");
	}

}