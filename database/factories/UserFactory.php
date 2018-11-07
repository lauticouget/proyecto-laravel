<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firsName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'height' => rand(130,220),
        'favorite_position' => array_rand(array('goalkeeper', 'defender', 'midfielder', 'forward')),
        'strong_foot' => array_rand(array('lefty', 'righty', 'ambidextrous')),
        'location' => array_rand(array('CABA', 'Escobar', 'Pilar', 'General Rodriguez', 'Marcos Paz', 'Cañuelas', 'San Vicente', 'La Plata', 'Ensenada', 'Berisso', 'Berazategui', 'Florencio Varela', 'Almirante Brown', 'Esteban Echeverria', 'Ezeiza', 'La Matanza', 'Merlo', 'Moreno', 'Jose C. Paz', 'Malvinas Argentinas', 'Tigre', 'San Fernando', 'San Isidro', 'Vicente Lopez', 'General San Martin', 'San Miguel', 'Hurlingham', 'Tres de Febrero', 'Ituzaingo', 'Moron', 'Presidente Peron', 'Lomas De Zamora', 'Quilmes', 'Avellaneda')),
        'phone' => $faker->e164PhoneNumber,
    ];
});
