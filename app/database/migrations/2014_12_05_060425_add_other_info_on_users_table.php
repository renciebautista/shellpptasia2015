<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddOtherInfoOnUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->string('department')->after('type')->nullable();
			$table->string('designation')->after('department')->nullable();
			$table->string('title')->after('designation')->nullable();
			$table->string('first_name')->after('title')->nullable();
			$table->string('last_name')->after('first_name')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn(array('department', 'designation', 'title', 'first_name', 'last_name'));
		});
	}

}
