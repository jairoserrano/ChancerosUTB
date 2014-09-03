<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsOfChanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('chances_id')->unsigned();
                        $table->foreign('chances_id')->references('id')->on('chances');
                        $table->integer('users_id')->unsigned();
                        $table->foreign('users_id')->references('id')->on('users');
                        $table->string('text','140');
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
		Schema::drop('comments');
	}

}
