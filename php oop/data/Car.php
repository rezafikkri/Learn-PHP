<?php

namespace Data;

abstract class Car
{
    public string $name;

    abstract public function run(): void;
}

class MitsubitshiLancer extends Car
{
    public function run(): void
    {
        echo "Car $this->name running" . PHP_EOL;
    }
}

class HondaCivic extends Car
{
    public function run(): void
    { 
        echo "Car $this->name running" . PHP_EOL;
    }
}
