<?php

namespace PHP81;

class Product
{

}

class Car
{
    public function __construct(
        public string $name = "Mitsubishi Lancer",
        public Product $product = new Product(),
    ) {
        
    }
}

$car = new Car();
var_dump($car);
