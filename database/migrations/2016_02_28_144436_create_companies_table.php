<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->nullable();
			$table->string('description');
			$table->json('address')->nullable();
			$table->json('tags')->nullable();
			$table->string('website')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('gps_lat')->nullable();
			$table->string('gps_lon')->nullable();
			$table->string('year_established')->nullable();
			$table->text('logo')->nullable();
			$table->json('images')->nullable();
			$table->integer('status')->nullable();
			$table->enum('featured',['0','1'])->nullable();
			$table->integer('category_id')->nullable();
			$table->integer('user_id')->unsigned();
			$table->decimal('average_ratings',5,2)->unsigned();


//
			  $table->foreign('user_id')
				->references('id')
				->on('users');

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
		Schema::drop('companies');
	}
}
