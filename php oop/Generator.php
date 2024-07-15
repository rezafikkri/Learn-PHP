<?php

function getGenap($max): Iterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

function getGanjil($max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

var_dump(getGanjil(10));

foreach (getGanjil(10) as $value)
{
    echo "Ganjil: $value" . PHP_EOL;
}
