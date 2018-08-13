<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 2018-08-03
 * Time: 14:47
 */

namespace App\Services\Test;

use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;

class QuestionService implements QuestionRepositoryInterface
{
    public function saveQuestion()
    {

    }

    private function checkIfRecordExist()
    {

    }

    public function canQuestionBeEditByUser($id)
    {
        // TODO: Implement canQuestionBeEditByUser() method.
    }

    /**
     * @return array
     */
    public function showAll()
    {
        // TODO: Implement showAll() method.
    }
}