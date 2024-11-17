<?php

namespace PHP81;

class Category
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
    ) {
    }
}

$category = new Category("1", "Handphone");
echo $category->name . PHP_EOL;

// $category->id = "2"; // Error

class Produk
{
    public readonly string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$produk = new Produk;
$produk->setName('Lenovo');
var_dump($produk);
