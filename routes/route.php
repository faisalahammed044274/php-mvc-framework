<?php

use App\Base\Router;
use App\Controllers\WelcomeController;
use App\Controllers\PortfolioController;

Router::get('/', [WelcomeController::class, 'hello']);

Router::get('portfolios', [PortfolioController::class, 'index']);

