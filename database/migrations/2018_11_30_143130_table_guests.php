<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGuests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->foreign('match_id')->references('id')->on('matches');

            $table->foreign('guest1_id')->references('id')->on('users');
            $table->foreign('guest2_id')->references('id')->on('users');
            $table->foreign('guest3_id')->references('id')->on('users');
            $table->foreign('guest4_id')->references('id')->on('users');
            $table->foreign('guest5_id')->references('id')->on('users');
            $table->foreign('guest6_id')->references('id')->on('users');
            $table->foreign('guest7_id')->references('id')->on('users');
            $table->foreign('guest8_id')->references('id')->on('users');
            $table->foreign('guest9_id')->references('id')->on('users');        
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
