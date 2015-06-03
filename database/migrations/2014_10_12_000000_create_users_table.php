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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname');
            $table->string('lname');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->string('a_code');
            $table->string('verified');
			$table->rememberToken();
            $table->timestamps('created_at')
            $table->timestamps('updated_at');
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
