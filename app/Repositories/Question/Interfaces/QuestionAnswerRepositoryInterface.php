<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 16.08.2018
 * Time: 11:11
 */

namespace App\Repositories\Question\Interfaces;


interface QuestionAnswerRepositoryInterface
{
    public function isAnswerExist ($test_id, $question_number);

}