<?php

class Zero
{
    private array $properties = [];

    public function __get($name): mixed
    {
        return $this->properties[$name];
    }

    public function __set($name, $value): void
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name): void
    {
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->firstName = "Reza";
$zero->middleName = "Sariful";
$zero->lastName = "Fikri";

echo "First Name : " . $zero->firstName . PHP_EOL;
echo "First Name : " . $zero->firstName . PHP_EOL;
echo "First Name : " . $zero->firstName . PHP_EOL;
