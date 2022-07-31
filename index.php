<?php

use Dotenv\Dotenv;
use Pecee\SimpleRouter\SimpleRouter;

//Autoload the vendor
require_once __DIR__ . '/vendor/autoload.php';

//Load from environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT', __DIR__);
define('VIEWS', __DIR__ . '/views');
define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : '');
//define()
var_dump($_ENV['BASE_DIR']);


/* Load external routes file */
require_once 'routes/route.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
