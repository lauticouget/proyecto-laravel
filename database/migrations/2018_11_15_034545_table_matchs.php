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
        Schema::table('matchs', function(Blueprint $table){
            $table->foreign('team1_id')->references('id')->on('teams')->change();
            $table->foreign('team2_id')->references('id')->on('teams')->change();
            $table->foreign('score1_id')->references('id')->on('scores')->change();
            $table->foreign('score2_id')->references('id')->on('scores')->change();
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
