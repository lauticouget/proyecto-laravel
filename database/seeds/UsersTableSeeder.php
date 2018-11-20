<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 20)->create();

        factory(User::class, 20)->create()->each(function ($user) {
            $user->role()->attach($faker->numberBetween(1,2));
        });

    }
}
