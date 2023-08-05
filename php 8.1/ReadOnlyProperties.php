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
var_dump($category);

// $category->id = "2"; // Error
