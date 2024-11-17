<?php

interface HasBrand
{
    public function getBrand(): string;
}

interface HasName
{
    public function getName(): string;
}

function printBrandAndName(HasBrand&HasName $value)
{
    echo $value->getBrand() . "-" . $value->getName() . PHP_EOL;
}

class Car implements HasBrand, HasName
{
    public function __construct(
        public string $brand,
        public string $name,
    ) {

    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

printBrandAndName(new Car("Honda", "Honda Civic"));
