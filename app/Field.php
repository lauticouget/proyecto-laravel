<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Match;

class Field extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location', 'adress', 'photopath',
        'owner_id',
        'phone',
    ];

    public function owner_id()
    {
        return $this->hasOne(Owner::class);
    }

    public function index() {
        return $db->prepare("SELECT * FROM fields");
    }
}
