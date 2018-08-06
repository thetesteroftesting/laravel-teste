<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public function answers ()
    {
        $this->hasMany(QuestionAnswer::class);
    }
}
