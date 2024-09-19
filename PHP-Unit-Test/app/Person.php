<?php

namespace RezaFikkri\PHPUnit;

use Exception;

class Person
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name): string
    {
        if (trim($name) == '') throw new Exception('Name is empty');
        return "Hello $name, my name is $this->name";
    }

    public function sayGoodBye(string $name): void
    {
        echo "Good bye $name" . PHP_EOL;
    }
}
