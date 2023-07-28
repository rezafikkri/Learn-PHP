<?php

namespace PHP8;

function sum(int ...$numbers)
{
    return array_sum($numbers);
}

var_dump(sum(
    12,
    5,
    3,
));

