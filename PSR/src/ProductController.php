<?php

namespace RezaFikkri\PSR;

class ProductController
{
    public function __construct(
        public ProductService $productService,
    ) {
        
    }
}
