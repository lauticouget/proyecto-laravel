<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Field;

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

    public function team2()
    {
        $team = Team::find($this->team2_id);
        return $team;
    }

    public function field()
    {
        $field = Field::find($this->field_id);
        return $field;
    }
}
