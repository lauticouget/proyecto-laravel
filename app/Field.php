<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function owner()
    {
            $owner = User::find($this->user_id);
            return $owner;
         
    }
}
