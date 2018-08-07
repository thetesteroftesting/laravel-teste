<?php

namespace App\Repositories\Question;


use http\Env\Request;

interface QuestionRepositoryInterface
{
    public function canQuestionBeEditByUser($id);

    /**
     * @return array
     */
    public function showAll();
}