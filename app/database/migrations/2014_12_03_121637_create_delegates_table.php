<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDelegatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delegates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('department')->nullable();
			$table->string('designation')->nullable();
			$table->string('title')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('contact_numbers')->nullable();
			$table->text('address')->nullable();
			$table->boolean('registered')->default(0);
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
		Schema::drop('delegates');
	}

}
