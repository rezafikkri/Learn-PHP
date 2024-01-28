<?php

namespace RezaFikkri\PHPUnitTest\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Product;
use RezaFikkri\PHPUnitTest\ProductRepository;
use RezaFikkri\PHPUnitTest\ProductService;

class ProductServiceTest extends TestCase
{
    private ProductRepository $repository;
    private ProductService $service;

    public function setUp(): void
    {
        $this->repository = $this->createStub(ProductRepository::class);
        $this->service = new ProductService($this->repository);
    }

    public function testStub(): void
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->method("findById")->willReturn($product);

        $result = $this->repository->findById("1");
        $this->assertSame($product, $result);
    }

    public function testStubMap(): void
    {
        $product1 = new Product();
        $product1->setId("1");

        $product2 = new Product();
        $product2->setId("2");

        $map = [
            ["1", $product1],
            ["2", $product2]
        ];

        $this->repository->method("findById")->willReturnMap($map);

        $this->assertSame($product1, $this->repository->findById("1"));
        $this->assertSame($product2, $this->repository->findById("2"));
    }

    public function testStubCallback(): void
    {
        $this->repository->method("findById")->willReturnCallback(function (string $id) {
            $product = new Product();
            $product->setId($id);
            return $product;
        });

        $this->assertSame("1", $this->repository->findById("1")->getId());
        $this->assertSame("2", $this->repository->findById("2")->getId());
    }

    public function testRegisterSuccess(): void
    {
        $this->repository->method("save")->willReturnArgument(0);

        $product = new Product();
        $product->setId("1");
        $product->setName("Contoh");

        $result = $this->service->register($product);

        $this->assertEquals($product->getId(), $result->getId());
        $this->assertEquals($product->getName(), $result->getName());
    }

    public function testRegisterFailed(): void
    {
        $this->expectException(Exception::class);

        $productInDB = new Product();
        $productInDB->setId("1");

        $this->repository->method("findById")->willReturn($productInDB);

        $product = new Product();
        $product->setId("1");

        $this->service->register($product);
    }

    public function testDeleteSuccess(): void
    {
        $product = new Product();
        $product->setId("1");

        $this->repository->method("findById")->willReturn($product);

        $this->service->delete("1");
        $this->assertTrue(true, "Success delete");
    }

    public function testDeleteFailed(): void
    {
        $this->expectException(Exception::class);
        $this->repository->method("findById")->willReturn(null);

        $this->service->delete("1");
    }
}
