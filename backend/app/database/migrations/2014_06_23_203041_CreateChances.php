<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChances extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chances', function(Blueprint $table) {
            $table->increments('id');
            $table->float('fee')->nullable();
            $table->datetime('date');
            $table->string('destination');
            $table->string('departure');
            $table->integer('capacity');
            $table->string('comments')->nullable();
            $table->integer('route'); // 1. Avenida 2. Mamonal 3. Bosque 4. Otros
            $table->integer('vehicles_id')->unsigned();
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onDelete('set null');
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
