<?php
use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\PortfolioController;

SimpleRouter::get('phpmvc/', function () {
    return 'Hello world';
});

SimpleRouter::get('phpmvc/portfolio', [PortfolioController::class, 'index']);