<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->integer('role');
			$table->string('sex')->nullable();
			$table->integer('phone_number')->nullable();
			$table->integer('confirmed')->nullable();
			$table->string('remember_token')->nullable();
			$table->enum('plan',['0','1','2']);
			$table->int('paid');
			$table->dateTime('payment_date');
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
