<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMosqueSalahTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mosque_salah_times', function($table)
		{
			$table->increments('id');
			$table->integer('mosque_id');
			$table->foreign('mosque_id')->references('id')->on('mosques')->onDelete('cascade');
			$table->integer('salah_id');
			$table->foreign('salah_id')->references('id')->on('salahs')->onDelete('cascade');
			$table->time('jamah');
			$table->time('azaan');
			$table->dateTime('update_day_time')->nullable();
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
		Schema::drop('mosque_salah_times');
	}

}
