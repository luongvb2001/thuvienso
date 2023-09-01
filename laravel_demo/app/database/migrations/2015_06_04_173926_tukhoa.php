<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tukhoa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tukhoa', function($table){
			$table->increments('STT_TK');
			$table->string('tailieu_id')->references('id')->on('tailieu')->onDelete('CASCADE')->onUpdate('CASCADE');;
			$table->text('TuKhoa');
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
		Schema::dropIfExists('tukhoa');
	}

}
