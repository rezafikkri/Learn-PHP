<?php

namespace properties;

class Person
{
    const AUTHOR = "Reza Sariful Fikri";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function sayHello(?string $name = null): void
    {
        if (is_null($name)) {
            echo "Hello, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" . PHP_EOL;
        }
    }

    public function info(): void
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

/*     public function __destruct()
    {
        echo "Object person $this->name is Destroyed" . PHP_EOL;
    } */
}

class Programmer extends Person
{
    // Override class constant
    // const AUTHOR = 'Programmer';
}
