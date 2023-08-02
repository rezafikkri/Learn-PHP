<?php

namespace PHP8;

use Exception;

function sayHello(string $name)
{
    $result = trim($name) != "" ? "Hello $name" : throw new Exception("Invalid");
    echo $result . PHP_EOL;
}

sayHello("Reza");
