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

    public function delete(string $id): void
    {
        $product = $this->repository->findById($id);
        if (is_null($product)) {
            throw new Exception('Product is not found');
        }

        $this->repository->delete($product);
    }
}
