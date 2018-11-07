<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Skill;
use App\Attitude;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $id = $table->increments('id');

            $avg = Skill::all()->where('user_id', $id)->avg('rated');
            $avgAt = Attitude::all()->where('user_id', $id)->avg('rated');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('height');
            $table->double('attitude', 2, 1)->default(2.0)->storeAs($avgAt);
            $table->double('skill', 2, 1)->default()->storeAs($avg);
            $table->string('favorite_position');
            $table->string('strong_foot');
            $table->string('location');
            $table->string('profile_img_path');
            $table->string('phone',10)->unique();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
