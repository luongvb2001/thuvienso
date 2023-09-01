<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tacgia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tacgia', function($table){
			$table->increments('STT_TG');
			$table->string('tailieu_id')->references('id')->on('tailieu')->onDelete('CASCADE')->onUpdate('CASCADE');;
			$table->text('tentacgia');
			
			
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
		Schema::dropIfExists('tacgia');
	}

}
