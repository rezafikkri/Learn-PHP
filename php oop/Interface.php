<?php

require_once "data/Motor.php";

use Data\CRF;

$crf = new CRF;
$crf->drive();
echo $crf->getTire() . PHP_EOL;
