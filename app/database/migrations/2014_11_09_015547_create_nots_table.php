<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nots', function ($table) {		

	        $table->increments('id');
	        $table->integer('not_id');
	        $table->string('not_name', 100);
	        $table->text('not_description');
	        $table->integer('department_id');
	        $table->integer('faculty_id');
	        $table->integer('user_id');
	        $table->integer('lecturer_id');
		});
	        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nots');
	}

}
