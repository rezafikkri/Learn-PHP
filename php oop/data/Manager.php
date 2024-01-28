<?php

class Manager
{
    public function __construct(
        protected string $name,
        public string $title = "Manager",
    ) {
        
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->title $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->title $this->name" . PHP_EOL;
    }
}
