<?php

require_once __DIR__ . "/vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("RezaLogger");
$log->pushHandler(new StreamHandler("application.log", Level::Info));

$log->info("Hello world");
$log->info("Selamat belajar composer");
