<?php

namespace RezaFikkri\PSR;

use DI\Container;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    #[Test]
    public function manual(): void
    {
        $repository = new ProductRepository();
        $service = new ProductService($repository);
        $controller = new ProductController($service);

        $this->assertNotNull($controller);
    }

    #[Test]
    public function dependencyInjection(): void
    {
        $container = new Container();
        $controller = $container->get(ProductController::class);

        $this->assertNotNull($controller);
        $this->assertNotNull($controller->productService);
        $this->assertNotNull($controller->productService->productRepository);

        $service = $container->get(ProductService::class);
        $repository = $container->get(ProductRepository::class);

        $this->assertSame($service, $controller->productService);
        $this->assertSame($repository, $controller->productService->productRepository);
    }
}
