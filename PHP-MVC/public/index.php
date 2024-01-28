<?php

use RezaFikkri\PHPMVC\Core\Router;
use RezaFikkri\PHPMVC\Controller\{
    AuthController,
    HomeController,
    ProductController,
};
use RezaFikkri\PHPMVC\Middleware\AuthMiddleware;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', AuthController::class, 'login');
Router::add('POST', '/sigin', AuthController::class, 'sigin');
Router::add('GET', '/logout', AuthController::class, 'logout', [AuthMiddleware::class]);

Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add(
    'GET',
    '/products/([\d\w]*)/categories/([\d\w]*)', 
    ProductController::class,
    'categories',
    [AuthMiddleware::class]
);

Router::run();
