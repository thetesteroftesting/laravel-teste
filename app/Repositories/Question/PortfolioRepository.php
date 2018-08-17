<?php

namespace App\Repositories\Question;


use App\Models\Portfolio\Portfolio;
use App\Repositories\Question\Interfaces\PortfolioRepositoryInterface;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function getViewPortfoliosData()
    {
        return Portfolio::with('category')
            ->with('abilities.criteria')
            ->with('uploads')
            ->get();
    }

}