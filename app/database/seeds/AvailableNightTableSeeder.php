<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AvailableNightTableSeeder extends Seeder {

	public function run()
	{
		DB::table('available_nights')->truncate();

		DB::statement("INSERT INTO available_nights (id, available_night) VALUES
			(1, '2015-02-26'),
			(2, '2015-02-27'),
			(3, '2015-02-28'),
			(4, '2015-02-25');");
	}

}