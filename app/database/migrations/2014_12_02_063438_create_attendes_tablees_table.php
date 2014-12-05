<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendesTableesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('prefix_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('prefered_name');
			$table->string('email');
			$table->string('mobile_phone');
			$table->text('assist_phone');
			$table->text('alternative_email');
			$table->string('company');
			$table->text('address');
			$table->string('job_title');
			$table->integer('country_id');
			$table->text('special');
			$table->boolean('withhotel');
			$table->integer('hotel_id')->nullable();
			$table->integer('room_type_id')->nullable();
			$table->text('billing');
			$table->boolean('with_arrival');
			$table->string('arrival_carrier')->nullable();
			$table->string('arrival_no')->nullable();
			$table->date('arrival_date')->nullable();
			$table->string('arrival_time')->nullable();
			$table->string('arrival_port')->nullable();
			$table->boolean('with_departure');
			$table->string('departure_carrier')->nullable();
			$table->string('departure_no')->nullable();
			$table->date('departure_date')->nullable();
			$table->string('departure_time')->nullable();
			$table->string('departure_port')->nullable();
			$table->boolean('withparking');
			$table->string('e_name');
			$table->string('e_number');
			$table->string('e_relationship');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attendees');
	}

}
