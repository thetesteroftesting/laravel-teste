<?php

namespace App\Repositories\Question\Interfaces;


use http\Env\Request;

interface QuestionRepositoryInterface
{
    public function canQuestionBeEditByUser($id);

    /**
     * @return array
     */
    public function showAll();
}