<?php

namespace properties;

class Person
{
    const AUTHOR = "Reza Sariful Fikri";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    public function sayHello(?string $name = null)
    {
        if (is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    public function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }
}
