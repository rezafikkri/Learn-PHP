<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RezaFikkri\MVC\App\Router;
use RezaFikkri\MVC\Controller\{HomeController};

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');

Router::run();
