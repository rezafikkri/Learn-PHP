<?php

namespace PHP81;

class Product
{
    public string $id;
}

class Car
{
    public function __construct(
        public string $name = "Mitsubishi Lancer",
        public Product $product = new Product(),
    ) {
        
    }

    function getCarProductId(Product $product = new Product()): string
    {
        $product->id = '123';
        return $product->id;
    }
}

$car = new Car();
var_dump($car->product);
var_dump($car->getCarProductId());
