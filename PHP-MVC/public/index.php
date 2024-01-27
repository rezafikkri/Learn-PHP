<?php

use RezaFikkri\PHPMVC\Controller\HomeController;
use RezaFikkri\PHPMVC\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');

Router::run();
