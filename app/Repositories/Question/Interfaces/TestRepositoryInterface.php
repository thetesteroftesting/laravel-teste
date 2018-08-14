<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 14.08.2018
 * Time: 13:49
 */

namespace App\Repositories\Question\Interfaces;


interface TestRepositoryInterface
{
    public function isBelongsToUser($test_id, $user_id);

    public function getTestByQuestionID($id);
}