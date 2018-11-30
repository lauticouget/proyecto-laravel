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
    public function guest()
    {
        return $this->hasMany(User::class);
    }

    
}
