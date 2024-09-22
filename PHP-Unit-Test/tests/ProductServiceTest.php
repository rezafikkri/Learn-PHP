<?php

namespace RezaFikkri\PHPUnit;

use Exception;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    protected function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub(): void
    {
        $product = new Product;
        $product->setId('1');

        $this->repository->method('findById')->willReturn($product);

        $result = $this->repository->findById('1');
        $this->assertSame($product, $result);
    }

    public function testStubMap(): void
    {
        $product1 = new Product;
        $product1->setId('1');

        $product2 = new Product;
        $product2->setId('2');

        $map = [
            ['1', $product1],
            ['2', $product2],
        ];
        $this->repository->method('findById')->willReturnMap($map);

        $this->assertSame($product1, $this->repository->findById('1'));
        $this->assertSame($product2, $this->repository->findById('2'));
    }

    #[Test]
    public function stubCallback()
    {
        $this->repository->method('findById')
            ->willReturnCallback(function (string $id) {
                $product = new Product;
                $product->setId($id);
                return $product;
            });

        $this->assertEquals('1', $this->repository->findById('1')->getId());
    }

    #[Test]
    public function registerSuccess(): void
    {
        // $this->repository->method('findById')
        //     ->willReturn(null); // tidak diperlukan karena method findById akan me-return null,
        //     hal ini karena return type method findById nullable
        $this->repository->method('save')
            ->willReturnArgument(0); // '0' adalah urutan dari argument yang ingin di return

        $product = new Product;
        $product->setId('1');
        $product->setName('Mie Goreng');

        $result = $this->service->register($product);

        $this->assertEquals('1', $result->getId());
        $this->assertEquals('Mie Goreng', $result->getName());
    }

    #[Test]
    public function registerException(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Product already exist!');

        $productInDb = new Product;
        $productInDb->setId('1');
        $this->repository->method('findById')
            ->willReturn($productInDb);

        $product = new Product;
        $product->setId('1');
        $product->setName('Test');

        $this->service->register($product);
    }
}
