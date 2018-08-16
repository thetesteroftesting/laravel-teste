<?php

namespace App\Services;


use App\Models\Test\QuestionAnswer;
use App\Repositories\Question\Interfaces\QuestionAnswerRepositoryInterface;
use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Question\Interfaces\TestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionAnswerSaver
{
    /**
     * @var integer
     */
    private $test_id;
    /**
     * @var TestRepositoryInterface
     */
    private $testRepository;

    /**
     * @var QuestionAnswerRepositoryInterface
     */
    private $questionAnswerRepository;

    /**
     * @var Request
     */
    private $request;

    /**
     * @var integer
     */
    private $questionAnswerID;

    /**
     * @var QuestionRepositoryInterface
     */
    private $questionRepository;

    /**
     * QuestionAnswerSaver constructor.
     * @param TestRepositoryInterface $testRepository
     * @param QuestionAnswerRepositoryInterface $questionAnswerRepository
     * @param QuestionRepositoryInterface $questionRepository
     */
    public function __construct(TestRepositoryInterface $testRepository, QuestionAnswerRepositoryInterface $questionAnswerRepository, QuestionRepositoryInterface $questionRepository)
    {
        $this->testRepository = $testRepository;
        $this->questionAnswerRepository = $questionAnswerRepository;
        $this->questionRepository = $questionRepository;
    }


    public function saveQuestion(Request $request, $id)
    {
        $this->request = $request;
        $this->questionAnswerID = $id;
        $this->questionRepository->getQuestionTypeByQuestionID($id);
        response($this->questionRepository->getQuestionTypeByQuestionID($id), 200) ;
    }


    private function saveQuestionSelect()
    {
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->question_number = 1;
        $questionAnswer->test_id = $this->getActualTestID();
        $questionAnswer->question_option = $this->request->input('answer');
        $questionAnswer->save();
    }


    /**
     * @return integer
     */
    private function getActualTestID()
    {
        if (Session::exists('test_id')) {
            $testID = Session::get('test_id');
            return $testID;
        } else {
            redirect('/');
        }
    }



}