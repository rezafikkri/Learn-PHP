<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\{Level,Logger,Handler\StreamHandler};

$log = new Logger('Test log');
$log->pushHandler(new StreamHandler('./composer.log', Level::Info));

// add records to the log
$log->log(Level::Info, 'Ini adalah log');
$log->warning('Foo');
$log->error('Bar');
