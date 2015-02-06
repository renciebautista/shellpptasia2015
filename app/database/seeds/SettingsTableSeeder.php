<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SettingsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('settings')->truncate();


 
		$setting = array(
		'enable_cutoff' => 0
		);
		 
		// Uncomment the below to run the seeder
		DB::table('settings')->insert($setting);
	}

}