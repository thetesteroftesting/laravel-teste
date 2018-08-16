<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{


    /*
     *  RELATIONS
     */
    public function criteria()
    {
        return $this->hasMany(Criterium::class, 'abilities_id', 'id');
    }
}
