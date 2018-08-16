<?php

namespace App\Repositories\Question\Interfaces;


use http\Env\Request;

interface QuestionRepositoryInterface
{
    public function doesThisTestIsLatest($id);

    /**
     * @return array
     */
    public function showAll();

    /**
     * @param $id
     * @return string
     */
    public function getQuestionTypeByQuestionID($id);
}