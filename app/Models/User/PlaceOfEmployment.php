<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2018-08-01
 * Time: 12:24
 */

namespace App\Models\User;


use App\User;
use Illuminate\Database\Eloquent\Model;

class PlaceOfEmployment extends Model
{
    protected $table = 'places_of_employment';

    public function users ()
    {
        return $this->hasMany(User::class, 'place_of_employment', 'id');
    }
}