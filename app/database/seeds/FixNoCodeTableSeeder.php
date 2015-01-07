<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FixNoCodeTableSeeder extends Seeder {

	public function run()
	{
		$no_code = DB::table('users')
			->whereNull('code')
			->where('type',2)
			->get();
		foreach ($no_code as $key => $value) {
			DB::table('users')->where('id', '=', $value->id)
				->update(array('code' => User::code()));
		}
	}

}