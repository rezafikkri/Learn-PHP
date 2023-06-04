<?php

function sayHello(?string $name)
{
    $result = $name ?? throw new Exception("Tidak boleh null");
    echo "Hello $result" . PHP_EOL;
}

sayHello("Reza");
