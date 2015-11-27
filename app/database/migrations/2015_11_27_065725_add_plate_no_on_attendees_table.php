<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPlateNoOnAttendeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attendees', function(Blueprint $table)
		{
			$table->string('plate_no')->nullable()->after('withparking');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attendees', function(Blueprint $table)
		{
			$table->dropColumn(array('plate_no'));
		});
	}

}
