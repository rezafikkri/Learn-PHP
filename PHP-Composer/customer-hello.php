<?php

require_once __DIR__ . '/vendor/autoload.php';

use RezaFikkri\BelajarComposerLibrary\Customer;

$customer = new Customer(name: 'Adelina', address: 'Bengkulu', job: 'Ners');
echo $customer->sayHello('Reza') . PHP_EOL;

$customer2 = new Customer(address: 'Kepahiang', job: 'Web Developer');
echo $customer2->sayHello() . PHP_EOL;
echo $customer2->getAddress() . PHP_EOL;
echo $customer2->getJob() . PHP_EOL;
