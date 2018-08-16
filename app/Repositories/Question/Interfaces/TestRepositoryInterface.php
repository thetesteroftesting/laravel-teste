<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 14.08.2018
 * Time: 13:49
 */

namespace App\Repositories\Question\Interfaces;


use App\Models\Test\Test;

interface TestRepositoryInterface
{
    /**
     * @param $test_id
     * @param $user_id
     * @return bool
     */
    public function isBelongsToUser($test_id, $user_id);

    /**
     * @param $id
     * @return Test
     */
    public function getTestByQuestionID($id);
}