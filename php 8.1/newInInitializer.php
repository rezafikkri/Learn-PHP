<?php

require_once "Category.php";

class Product
{
    public function __construct(
        public string $name = "No name",
        public Category $category = new Category("0", "Default category"),
    ) {

    }
}

$product = new Product("Ipad", new Category("1", "Gadget"));
var_dump($product);
