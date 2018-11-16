<?php

use Illuminate\Database\Seeder;
use App\Attitude;
use App\Owner;
use App\User;
use App\skill;
use App\team;
use App\Score;
use App\Field;
use App\Match;

class FirstDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        factory(Attitude::class, 20)->create();
        factory(Owner::class, 20)->create();
        factory(skill::class, 20)->create();
        factory(team::class, 20)->create();
        factory(Score::class, 20)->create();
        factory(Field::class, 20)->create();
        factory(Match::class, 20)->create();
    }
}
