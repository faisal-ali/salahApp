<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosquesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mosques', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('image_url')->nullable();
			$table->string('address')->nullable();
			$table->float('latitude')->nullable();
			$table->float('longitude')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
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
		Schema::drop('mosques');
	}

}
