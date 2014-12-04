<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function ($table) {		

	        $table->increments('id');
	        $table->integer('exam_id');
	        $table->string('exam_name', 100);
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
		Schema::drop('exams');
	}


}
