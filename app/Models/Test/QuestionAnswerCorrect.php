<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswerCorrect extends Model
{
    public function questions ()
    {
        $this->belongsToMany(QuestionAnswer::class);
    }

    public function questionsOptions ()
    {
        return $this->belongsToMany(QuestionOption::class);
    }
}
