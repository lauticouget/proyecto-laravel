<?php

use Faker\Generator as Faker;
use App\Attitude;

$factory->define(App\Attitude::class, function (Faker $faker) {
    return [
        'rated' => rand(1,5),
        'user_id' => $faker->numberBetween($min = 1, $max = 20),

    ];
});
