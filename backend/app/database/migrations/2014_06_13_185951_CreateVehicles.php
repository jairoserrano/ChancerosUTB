<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicles extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vehicles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('plate');
            $table->string('color');
            $table->string('brand');
            $table->string('model');
            $table->integer('capacity');
            $table->boolean('status');
            $table->integer('type'); // 1. Carros/Camionetas 2. Motos 3. Otros
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('vehicles');
    }

}
