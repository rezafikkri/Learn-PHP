<?php

require_once __DIR__ . "/vendor/autoload.php";

use PhpComposer\Data\Programmer;

$programmer = new Programmer("Reza", "Web Developer");

echo $programmer->sayHello("Dian") . " saya seorang " . $programmer->job . PHP_EOL;
