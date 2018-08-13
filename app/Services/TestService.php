<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 13.08.2018
 * Time: 14:41
 */

namespace App\Services;


use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;
use Illuminate\Http\Request;

class TestService
{
    /**
     * @var QuestionRepositoryInterface
     */
    private $questions;

    /**
     * TestService constructor.
     * @param QuestionRepositoryInterface $questions
     */
    public function __construct(QuestionRepositoryInterface $questions)
    {
        $this->questions = $questions;
    }

    public function startTest(Request $request)
    {

    }






}