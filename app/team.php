<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;

class Team extends Model
{
    public function matches()
    {
        $this->belongsToMany(Match::class);
    }
}
