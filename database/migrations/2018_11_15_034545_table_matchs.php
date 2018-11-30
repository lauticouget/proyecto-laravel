<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMatchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function(Blueprint $table){
            $table->foreign('team1_id')->references('id')->on('teams')->change();
            $table->foreign('team2_id')->references('id')->on('teams')->change();
            $table->foreign('score1_id')->references('id')->on('scores')->change();
            $table->foreign('score2_id')->references('id')->on('scores')->change();

            $table->foreign('guest1')->references('id')->on('users');
            $table->foreign('guest2')->references('id')->on('users');
            $table->foreign('guest3')->references('id')->on('users');
            $table->foreign('guest4')->references('id')->on('users');
            $table->foreign('guest5')->references('id')->on('users');
            $table->foreign('guest6')->references('id')->on('users');
            $table->foreign('guest7')->references('id')->on('users');
            $table->foreign('guest8')->references('id')->on('users');
            $table->foreign('guest9')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
