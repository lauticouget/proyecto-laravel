<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');

            $table->integer('goalkeeper_id')->unsigned();
            $table->foreign('goalkeeper_id')->references('id')->on('users')->unique()->change();

            $table->integer('player1_id')->unsigned();
            $table->foreign('player1_id')->references('id')->on('users')->unique()->change();

            $table->integer('player2_id')->unsigned();
            $table->foreign('player2_id')->references('id')->on('users')->unique()->change();

            $table->integer('player3_id')->unsigned();
            $table->foreign('player3_id')->references('id')->on('users')->unique()->change();

            $table->integer('captain_id')->unsigned();
            $table->foreign('captain_id')->references('id')->on('users')->unique()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
