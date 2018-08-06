<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    public function question ()
    {
        return $this->hasMany(Question::class);
    }
}
