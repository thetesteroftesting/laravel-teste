<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 17.08.2018
 * Time: 08:39
 */

namespace App\Http\Controllers\Portfolio;


use App\Http\Controllers\Controller;
use App\Repositories\Question\Interfaces\PortfolioRepositoryInterface;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * @var PortfolioRepositoryInterface
     */
    private $portfolioRepository;

    /**
     * PortfolioController constructor.
     * @param PortfolioRepositoryInterface $portfolioRepository
     */
    public function __construct(PortfolioRepositoryInterface $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    /*
     *  Controller Methods
     */
    public function show(Request $request)
    {
        $data = $this->portfolioRepository->getViewPortfoliosData();
        print_r($data);
    }
}



























