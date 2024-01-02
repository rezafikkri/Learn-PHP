<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$log = new Logger('RezaFikkri');
$log->pushHandler(new StreamHandler('application.log', Level::Info));

$log->info("Hello World");
$log->info("Selamat belajar composer");
