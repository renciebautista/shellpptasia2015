<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ReasonTableSeeder extends Seeder {

	public function run()
	{
		DB::table('reasons')->truncate();

		DB::statement("INSERT INTO reasons (id, reason) VALUES
			(1, 'Prior commitment'),
			(2, 'Personal reason'),
			(3, 'Will be away'),
			(4, 'Other');");
	}

}