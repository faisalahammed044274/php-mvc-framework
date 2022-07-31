<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\WelcomeController;
use App\Controllers\PortfolioController;

SimpleRouter::get(BASE_DIR . '/', [WelcomeController::class, 'hello']);

SimpleRouter::get(BASE_DIR . '/portfolio', [PortfolioController::class, 'index']);
