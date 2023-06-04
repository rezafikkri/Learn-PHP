<?php


function greet(string $name, string $greeting = 'Sariful', string $last = 'Fikri'): void
{
    echo "$greeting, $name, $last";
}

// greet('Simon');        //"Hello, Simon"
greet(name: 'Simon', last: "Fikkri"); // "Hello, Simon"
