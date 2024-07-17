<?php

class Overloading
{
    private array $properties = [];

    private string $name = 'Adelina';

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        return "Call method $name " . join('-', $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        return "Call static method $name " . join('-', $arguments);
    }
}

$overloading = new Overloading;
$overloading->name = "Reza";

echo $overloading->name . PHP_EOL; // result is 'Reza', not 'Adelina'

echo $overloading->notfoundmethod() . PHP_EOL;
echo Overloading::notofundstaticMethod() . PHP_EOL;
