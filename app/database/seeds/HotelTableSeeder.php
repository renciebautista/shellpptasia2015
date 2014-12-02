<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HotelTableSeeder extends Seeder {

	public function run()
	{
		DB::table('hotels')->truncate();

		DB::statement("INSERT INTO hotels (id, name, address, map, website, picture) VALUES
			(1, 'MANILA HOTEL', 'Bonifacio Drive, One Rizal Park 0913, Manila Philippines', 'http://www.manila-hotel.com.ph/maps', 'http://www.manila-hotel.com.ph' ,'1.jpg'),
			(2, 'HOTEL H2O', 'Luneta, 1000, Manila, Philippines (Behind the Quirino Grandstand)', 'http://www.hotelh2o.com/main/maps', 'http://www.hotelh2o.com' ,'2.jpg');");
	}

}