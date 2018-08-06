<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function getAll()
    {
        return $this->with('options')->with('questionType')->get();
    }

    public function numberOfQuestions ()
    {
        return $this->all()->groupBy('question_number')->count();
    }


    /*
     *  RELATIONS
     */
    public function options ()
    {
        return $this->hasMany(QuestionOption::class, 'question_number');
    }

//    public function effectOfProgress()
//    {
//        return $this->hasOne(EffectsOfProgress::class, 'id', 'effect_of_progress_id');
//    }

    public function questionType()
    {
        return $this->hasOne(QuestionType::class, 'id', 'question_type_id');
    }

    public function correctAnswer()
    {
        $this->hasOne(QuestionAnswerCorrect::class);
    }

}
