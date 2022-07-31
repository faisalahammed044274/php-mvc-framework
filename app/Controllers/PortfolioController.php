<?php

namespace App\Controllers;

use App\Base\Controller;
use App\Models\Portfolio;



class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = new Portfolio;
        $portfolio = $portfolio->get();

        return views('portfolios/index.php', ['portfolios' => $portfolio]);
        // return views('portfolios/index.php', compact('portfolio'));
    }
}
