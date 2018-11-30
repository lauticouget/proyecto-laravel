<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('match_id')->unsigned();;

            $table->integer('guest1_id')->unsigned();;
            $table->integer('guest2_id')->unsigned();;
            $table->integer('guest3_id')->unsigned();;
            $table->integer('guest4_id')->unsigned();;
            $table->integer('guest5_id')->unsigned();;
            $table->integer('guest6_id')->unsigned();;
            $table->integer('guest7_id')->unsigned();;
            $table->integer('guest8_id')->unsigned();;
            $table->integer('guest9_id')->unsigned();;

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
