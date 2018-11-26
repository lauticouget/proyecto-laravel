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
        'role',
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

           //---------- ROLES-----------//

    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
        return $this->hasAnyRole($roles) || 
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || 
            abort(401, 'This action is unauthorized.');
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
        return null !== $this->role()->whereIn('name', $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
        return null !== $this->role()->where('name', $role)->first();
    }

    

    
}

