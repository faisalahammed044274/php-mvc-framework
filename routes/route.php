<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\WelcomeController;
use App\Controllers\PortfolioController;

SimpleRouter::get('phpmvc/', [WelcomeController::class, 'hello']);

SimpleRouter::get('phpmvc/portfolio', [PortfolioController::class, 'index']);
