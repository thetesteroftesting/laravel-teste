<?php

namespace App\Http\Controllers\Question;

use App\Models\Test\Question;
use App\Models\Test\QuestionAnswer;
use App\Models\Test\Test;
use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;
use App\Services\TestService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    /**
     * @var Question
     */
    private $questions;
    /**
     * @var Test
     */
    private $test;
    /**
     * @var QuestionRepositoryInterface
     */
    private $questionRepository;

    /**
     * @var TestService
     */
    private $testService;

    /**
     * TestController constructor.
     * @param Question $questions
     * @param Test $test
     * @param QuestionRepositoryInterface $questionRepository
     */
    public function __construct(Question $questions, Test $test, QuestionRepositoryInterface $questionRepository, TestService $testService)
    {
        $this->test = $test;
        $this->questions = $questions;
        $this->testService = $testService;
        $this->questionRepository = $questionRepository;
        $this->middleware('auth');
    }

    /**
     * STARTS NEW TEST OR CONTINUE PREVIOUS
     *
     * @return \Illuminate\Http\Response
     */
    public function startTest(Request $request)
    {
        $questions = $this->questions->getAll();

        //check if isset session
        if (!Session::has('test_id')) {
            $testCreator = new Test();
            $testCreator->user_id = Auth::id();
            $testCreator->completed = 0;
            $testCreator->points = 0;
            $testCreator->save();
            Session::put('test_id', $testCreator->id);
        } else {

        }

        return view('test.test')
            ->with('questions', $questions);
    }

    public function actionSaveQuestion($id, Request $request)
    {
        /*
         *  Check session and if user has permission to do this.
         */
        if (Session::has('test_id')) {

//            $questionAnswer = QuestionAnswer::firstOrNew(
//                ['question_number' => $id]
//            );
//            $questionAnswer->question_option_id = $request->input('question_option_id');
//            $questionAnswer->question_number = $id;
//            $questionAnswer->test_id = Session::get('test_id');
//            $questionAnswer->save();
//
            /*
             *  1. Check Type Of Question
             */
            $questionType = Question::select('question_type')->where('question_type', '=', $id)->first();

        }

    }

    public function actionSaveQuestions()
    {

    }

    public function actionSaveTest()
    {

    }


}
