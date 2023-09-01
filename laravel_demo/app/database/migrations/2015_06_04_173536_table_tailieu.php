<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTailieu extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tailieu2', function($table){
			$table->increments('id');
			$table->string('tuade');
			$table->string('image');
			$table->char('loaifile');
			$table->char('sotrang');
			$table->text('tacgia');
			$table->text('tukhoa');
			$table->string('link');
			$table->text('intro');
			$table->text('body');
			$table->integer('loaitailieu_id')->references('id')->on('loaitailieu')->onDelete('CASCADE')->onUpdate('CASCADE');
			$table->integer('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
			
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
		Schema::dropIfExists('tailieu2');
	}

}
