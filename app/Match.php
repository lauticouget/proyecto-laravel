<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Match extends Model
{
    public function team()
    {
        $this->hasMany(Team::class);
    }

    public function team1()
    {
        $team = Team::find($this->team1_id);
        return $team;
    }

    
}
