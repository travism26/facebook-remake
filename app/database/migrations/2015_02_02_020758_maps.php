<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('markers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('latitude');
			$table->double('longitude');
			$table->double('opacity');
			$table->boolean('draggable');
			$table->string('title');
			$table->boolean('visible');
			$table->integer('zIndex');
			$table->text('description');
//			$table->integer('')->index();
//			$table->integer('user_id')->index();
//			$table->text('body');
//			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
