<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 14.08.2018
 * Time: 13:49
 */

namespace App\Repositories\Question;


use App\Models\Test\Test;
use App\Repositories\Question\Interfaces\TestRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Auth;

class TestRepository implements TestRepositoryInterface
{
    private $user;
    private $test;

    /**
     * TestRepository constructor.
     * @param $user
     */
    public function __construct(User $user, Test $test)
    {
        $this->user = $user;
        $this->test = $test;
    }

    public function isBelongsToUser($test_id, $user_id)
    {
        $testQ = Test::where('id', '=', $test_id)
            ->where('user_id', '=', Auth::user()->id)
            ->count();

        if($testQ == 1)
            return true;
        else
            return false;

    }

    public function getTestByQuestionID($id)
    {
        // TODO: Implement getTestByQuestionID() method.
    }
}