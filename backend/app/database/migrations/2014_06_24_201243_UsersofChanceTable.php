<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersofChanceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usersofchance', function(Blueprint $table) {
            $table->increments('id');
//            $table->integer('chances_id')->unsigned();
//            $table->foreign('chances_id')->references('id')->on('chances')->onDelete('cascade');
//            $table->integer('users_id')->unsigned();
//            $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('usersofchance');
    }

}
