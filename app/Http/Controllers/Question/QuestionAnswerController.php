<?php

namespace App\Http\Controllers\Question;

use App\Services\QuestionAnswerSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionAnswerController extends Controller
{
    /**
     * @var QuestionAnswerSaver
     */
    private $questionAnswerSaver;

    /**
     * QuestionAnswerController constructor.
     * @param QuestionAnswerSaver $questionAnswerSaver
     */
    public function __construct(QuestionAnswerSaver $questionAnswerSaver)
    {
        $this->questionAnswerSaver = $questionAnswerSaver;
    }


    /**
     * Update or create the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return void
     */
    public function save(Request $request, $questionID)
    {
        $this->questionAnswerSaver->saveQuestion($request,$questionID);
    }

}
