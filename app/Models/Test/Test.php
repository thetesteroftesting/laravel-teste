<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

//    public function attempsQuantity()
//    {
//
//    }

    /*
     *  RELATIONS
     */
    public function answers()
    {
        $this->hasMany(QuestionAnswer::class);
    }
}
