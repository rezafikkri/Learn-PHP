<?php

namespace RezaFikkri\PSR;

class ProductService
{
    public function __construct(
        public ProductRepository $productRepository,
    ) {
        
    }
}
