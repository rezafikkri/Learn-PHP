<?php

require_once "data/Human.php";

use Data\CRF;

$crf = new CRF;
$crf->drive();
echo $crf->getTire() . PHP_EOL;
