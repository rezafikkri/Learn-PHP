<?php

$nama = "Reza";

function sayHello(callable $filter)
{
    echo "Hallo" . $filter();
}

sayHello(function () use ($nama) {
 return strtoupper($nama);
});
