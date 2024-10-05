<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RezaFikkri\MVC\App\Router;
use RezaFikkri\MVC\Controller\{HomeController, ProductController};

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/product/([\d\w]+)/category/([\d\w]*)', ProductController::class, 'category');

Router::run();
