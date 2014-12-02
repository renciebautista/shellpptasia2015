<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PrefixTableSeeder extends Seeder {

	public function run()
	{
		DB::table('prefixes')->truncate();

		DB::statement("INSERT INTO prefixes (id, prefix) VALUES
			(1, 'Miss'),
			(2, 'Mr'),
			(3, 'Mrs'),
			(4, 'Ms');");
	}

}