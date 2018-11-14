<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     /* public function run()
    {
        DB::table('users')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'height'
            'attitude', 2, 1)->default(2.0)->storeAs($avgAt
            'skill', 2, 1)->default(2.0)->storeAs($avgSk
            'favorite_position'
            'strong_foot'
            'location'
            'profile_img_path')->nullable(
            'phone',10)->unique(
        ]);
        
    } */
}
