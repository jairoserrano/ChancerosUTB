<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

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
			$table->string('name',50);
                        $table->string('lastname', 70);
                        $table->string('identification', 20)->unique();
                        $table->string('password');
                        $table->string('email');
                        $table->string('cellphone'); //Numero de celular
                        $table->integer('gender'); //1. Masculino 2. Femenino
                        $table->date('birthday'); //Fecha de nacimiento
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
