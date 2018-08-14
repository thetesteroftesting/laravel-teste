<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    public function question ()
    {
        $this->hasOne(Question::class, 'question_number', 'question_number');
    }
}
