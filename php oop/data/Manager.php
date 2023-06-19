<?php

class Manager
{
    public function __construct(
        protected string $name,
    ) {
        
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
