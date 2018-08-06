<?php

namespace App\Repositories\Question;

class QuestionRepository implements QuestionRepositoryInterface
{

    public function __construct()
    {

    }

    /**
     * @return bool
     */
    public function canQuestionBeEditByUser($id)
    {
        /*
         * 1. find latest test ID
         */
        $latestTestID = DB::table('tests')
            ->select('test_id')
            ->where('user_id', '=', Auth::id())
            ->order_by('created_at', 'desc')
            ->first();
        /*
         *  2. select Question
         */
        $questionTestID = DB::table('question_answers')
            ->select('test_id')
            ->where('id', '=', $id)
            ->first();
        /*
         * 3. Compare
         */
        if ($questionTestID === $latestTestID) {
            return true;
        } else {
            return false;
        }
    }


}
























