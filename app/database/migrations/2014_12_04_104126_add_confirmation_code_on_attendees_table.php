<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddConfirmationCodeOnAttendeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attendees', function(Blueprint $table)
		{
			$table->string('code')->after('id');
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
			$table->dropColumn('code');
		});
	}

}
