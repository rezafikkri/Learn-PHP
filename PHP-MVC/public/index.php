<?php

use RezaFikkri\PHPMVC\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'login');
Router::add('GET', '/register', 'UserController', 'register');

Router::run();
