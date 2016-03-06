<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->string('name');
			$table->string('message');
			$table->integer('blog_id')->unsigned();
			$table->timestamps();
		
			$table->foreign('blog_id')
				->references('id')
				->on('blogs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}
}
