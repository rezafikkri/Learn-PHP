<?php

require_once('helper/MathHelper.php');

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
MathHelper::$name = "Reza";
echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(1, 2, 3, 4) . PHP_EOL;
$math = new MathHelper;
echo $math->divide(). PHP_EOL;
echo $math->sum(1,2,3) . PHP_EOL;
