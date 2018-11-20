<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Team;
use App\Role;
use App\Attitude;
use Illuminate\Support\Facades\DB;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password',
        'last_name',
        'height',
        'favorite_position',
        'strong_foot',
        'location',
        'profile_img_path',
        'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team()
    {
        return $this->belongsToMany(Team::class);
    }

    public function attitude()
    {
        return $this->hasMany(Attitude::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function rated()
    {
        return $this->attitude()->rated;
    }

    public function avgAtt()
    {
        $id = $this->id;
        $avgAtt = DB::table('attitudes')
        ->select(DB::raw('ROUND(avg(rated),1) as avgAtt'))
        ->where('user_id', '=', $id)
        ->first();
        $avgAtt = $avgAtt->avgAtt;
        return $avgAtt;
    }

    public function avgSkill()
    {
        $id = $this->id;
        $avgSkill = DB::table('Skills')
        ->select(DB::raw('ROUND(avg(rated),1) as avgSkill'))
        ->where('user_id', '=', $id)
        ->first();
        $avgSkill = $avgSkill->avgSkill;
        return $avgSkill;
    }
}
