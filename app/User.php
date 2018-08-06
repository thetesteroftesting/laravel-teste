<?php

namespace App;

use App\Models\User\PlaceOfEmployment;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'first_name',
        'second_name',
        'nickname',
        'place_of_employment',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /*
     *  RELATIONS
     */
    public function placeOfEmployment()
    {
        return $this->hasOne(PlaceOfEmployment::class, 'id', 'place_of_employment');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function isAdministrator()
    {
        return $this->roles()->where('name', 'admin')->exists();
    }

}
