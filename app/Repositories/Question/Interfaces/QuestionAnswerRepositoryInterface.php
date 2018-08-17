<?php

namespace App\Repositories\Question\Interfaces;


interface QuestionAnswerRepositoryInterface
{
    public function isAnswerExist ($test_id, $question_number);

}