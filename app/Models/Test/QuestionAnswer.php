<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    public function question ()
    {
        return $this->hasOne(Question::class, 'question_number', 'question_number');
    }

    public function test ()
    {
        return $this->hasOne(Test::classs);
    }




}
