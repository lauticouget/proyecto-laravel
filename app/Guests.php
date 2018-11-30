<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;

class Guests extends Model
{
    public function match()
    {
        return $this->belongsTo(Match::class);
    }

    public function guest1()
    {
        $guest = User::find($this->guest1_id);
        return $team;
    }
    public function guest2()
    {
        $guest = User::find($this->guest2_id);
        return $team;
    }
    public function guest3()
    {
        $guest = User::find($this->guest3_id);
        return $team;
    }
    public function guest4()
    {
        $guest = User::find($this->guest4_id);
        return $team;
    }
    public function guest5()
    {
        $guest = User::find($this->guest5_id);
        return $team;
    }
    public function guest6()
    {
        $guest = User::find($this->guest6_id);
        return $team;
    }
    public function guest7()
    {
        $guest = User::find($this->guest7_id);
        return $team;
    }
    public function guest8()
    {
        $guest = User::find($this->guest8_id);
        return $team;
    }
    public function guest9()
    {
        $guest = User::find($this->guest9_id);
        return $team;
    }
}
