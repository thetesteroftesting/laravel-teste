<?php

namespace App\Repositories\Question;

use App\Models\Test\Question;
use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;

class QuestionRepository implements QuestionRepositoryInterface
{

    /**
     * @var Question
     */
    private $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    /**
     * @return bool
     */
    public function doesThisTestIsLatest($id)
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

    /**
     * @return array
     */
    public function showAll()
    {
        return collect($this->question->getAll())
            ->sortBy('question_number')
            ->toArray();
    }

    /**
     * @param $id
     * @return string
     */
    public function getQuestionTypeByOptionID($id)
    {
        $this->question->with('question')
            ->select('question_type')
            ->where('question_number', '=', $id)
            ->first();
    }


}
























