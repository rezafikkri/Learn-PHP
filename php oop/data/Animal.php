<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    abstract public function run(): void;

    public function eat(AnimalFood $food): void
    {
        echo "Cat $this->name is eating " . get_class($food) . PHP_EOL;
    }
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    } 
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo "Dog $this->name is eating " . get_class($food) . PHP_EOL;
    }
}
