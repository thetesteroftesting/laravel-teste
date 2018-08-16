<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 16.08.2018
 * Time: 11:12
 */

namespace App\Repositories\Question;


use App\Models\Test\QuestionAnswer;
use App\Repositories\Question\Interfaces\QuestionAnswerRepositoryInterface;

class QuestionAnswerRepository implements QuestionAnswerRepositoryInterface
{

    public function isAnswerExist($test_id, $question_number)
    {
        $data = QuestionAnswer::where('question_number', '=', $question_number)
            ->where('test_id', '=', $test_id)
            ->first();
        if (!isEmpty($data))
            return true;
        else
            return false;
    }
}