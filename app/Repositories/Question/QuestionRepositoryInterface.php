<?php

namespace App\Repositories\Question;


use http\Env\Request;

interface QuestionRepositoryInterface
{
    public function getAll();
    public function store(Request $request);
}