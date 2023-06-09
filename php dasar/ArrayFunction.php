<?php

$num = [1, 4, 6, 7, 9, 11, 10];
var_dump(array_filter($num, fn($n) => $n % 2 == 0));

var_dump(array_map(fn($n) => $n * 2, $num));


