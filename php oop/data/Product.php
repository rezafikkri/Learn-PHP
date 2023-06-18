<?php

class Product
{
    public function __construct(
        protected string $name,
        private int $price,
    ) {
        
    }

    public function getName(): string
    {
        return $this->name . PHP_EOL;
    }

    public function getPrice(): int
    {
        return $this->price . PHP_EOL;
    }
}

class UsedProduct extends Product
{
    public function info()
    {
        echo "Name : " . $this->name . PHP_EOL;
    }
}
