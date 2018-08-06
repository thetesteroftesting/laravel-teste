<?php

namespace App\Repositories\Question;

use App\Models\Test\Question;
use App\User;
use http\Env\Request;

class QuestionRepository implements QuestionRepositoryInterface
{
    /**
     * @var UserRepository
     */
    private $user;

    /**
     * QuestionRepository constructor.
     * @param User $user
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return User::with('option')
            ->with('effectOfProgress')
            ->with('correctAnswer')
            ->with('questionType')
            ->get();
    }

    public function store(Request $request)
    {
        $question = new Question();
        $question->text = 'przyklad';
        $question->options_id = 1;
        $question->answer_correct_id = 1;
        $question->effect_of_progress_id = 1;
        $question->effect_of_progress_id = 1;
        $question->question_type_id = 1;
        $question->save();
    }


}
























