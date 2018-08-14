<?php

namespace App\Services;


use App\Models\Test\QuestionAnswer;
use App\Repositories\Question\Interfaces\TestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuestionAnswerSaver
{
    private $test_id;
    private $user_id;
    private $testRepository;


    public function __construct(TestRepositoryInterface $testRepository)
    {
        $this->test_id = $this->getActualTestID();
        $this->user_id = Auth::user()->id;
        $this->testRepository = $testRepository;
    }


    public function saveQuestion (Request $request)
    {
        $this->saveByType($request);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->question_number = 1;
        $questionAnswer->test_id = 1;
        $questionAnswer->question_option = 1;
        $questionAnswer->save();
    }

    private function saveByType ($question_number)
    {
        Question::where('id', '=', $question_number)->first();
    }


    private function getActualTestID ()
    {
        $testID = Session::get('test_id');
        return $testID;
    }
    



}