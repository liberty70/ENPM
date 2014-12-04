<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function ($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('email', 50);
            $table->string('username', 30);
            $table->string('fullname', 50);
            $table->boolean('user_role')->default(0);
            $table->string('password',255);
			$table->string('password_temp',255);
			$table->string('platform',255);
			$table->boolean('activated')->default(0);
			$table->string('activation_code',225);
			$table->date('activated_at');
			$table->date('last_login');			
			$table->string('remember_token',100);
			$table->string('reset_password_code',225);

            $table->string('profile_link', 255);
            $table->string('facebook_link', 255);
            $table->string('twitter_link', 255);
            $table->string('linkedin_link', 255);
            $table->string('instagram_link', 255);
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
		Schema::drop('users');
	}

}
