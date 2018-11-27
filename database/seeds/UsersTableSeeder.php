<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create()->each(function ($user){
            $user->roles()->attach(rand(1,2));
        });

        $lauti = new User([
            'first_name' => 'Lauti',
            'password' =>  Hash::make('asdasd'),
            'email' => 'lauticouget@gmail.com',
        ]);

        $lauti->save();
    }
}
