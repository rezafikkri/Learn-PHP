<?php

namespace PHP8;

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        protected int $price = 10000,
        private int $qty = 12,
    ) {}
}

$product = new Product("1", "Mie Goreng", qty: 1);
var_dump($product);
