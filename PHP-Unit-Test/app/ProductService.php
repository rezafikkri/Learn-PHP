<?php

namespace RezaFikkri\PHPUnit;

use Exception;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
        
    }

    public function register(Product $product): Product
    {
        if ($this->repository->findById($product->getId()) != null) {
            throw new Exception('Product already exist!');
        }

        return $this->repository->save($product);
    }
}
