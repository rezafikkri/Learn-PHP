<?php

use RezaFikkri\PHPMVC\Controller\HomeController;
use RezaFikkri\PHPMVC\Controller\ProductController;
use RezaFikkri\PHPMVC\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');

Router::add('GET', '/products/([\d\w]*)/categories/([\d\w]*)', ProductController::class, 'categories');

Router::run();
