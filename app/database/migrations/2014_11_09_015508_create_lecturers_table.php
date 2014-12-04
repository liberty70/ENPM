<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lecturers', function ($table) {		

	        $table->increments('id');
	        $table->integer('lecturer_id');
	        $table->string('lecturer_name', 100);
		});
        
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lecturers');
	}


}
