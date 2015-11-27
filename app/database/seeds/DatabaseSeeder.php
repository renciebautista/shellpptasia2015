<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PrefixTableSeeder');
		$this->call('CountriesSeeder');
		$this->call('AvailableNightTableSeeder');
		$this->call('HotelTableSeeder');
		$this->call('RoomTypeTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('AttendeeStatusTableSeeder');
		$this->call('ReasonTableSeeder');
		// ReasonTableSeeder
	}

}
