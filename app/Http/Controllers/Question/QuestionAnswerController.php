<?php

namespace App\Http\Controllers\Question;

use App\Models\Test\QuestionAnswer;
use App\Services\QuestionAnswerSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class QuestionAnswerController extends Controller
{
    /**
     * @var QuestionAnswerSaver
     */
    private $questionAnswerSaver;

    /**
     * Update or create the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return void
     */
    public function save(Request $request, $id)
    {
        $this->questionAnswerSaver->saveQuestion($request,$id);

        if (Session::exists('test_id')) {
            $questionAnswer = new QuestionAnswer();
            $questionAnswer->test_id = Session::get('test_id');
            $questionAnswer->question_number = $id;
            $questionAnswer->question_option = $request->input('answer');
            $questionAnswer->save();
        }
    }

}
