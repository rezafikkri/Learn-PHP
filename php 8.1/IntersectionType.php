<?php

interface HasBrand
{
    function getBrand(): string;
}

interface HasName
{
    function getName(): string;
}

class Car implements HasBrand, HasName
{
    public function __construct(
        private string $brand,
        private string $name,
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

function printBrandAndName(HasBrand & HasName $value)
{
    echo $value->getBrand() . "." . $value->getName() . PHP_EOL;
}

printBrandAndName(new Car("Toyota", "Avanza"));
printBrandAndName(new Car("Mitsubishi", "Mitsubishi Lancer"));
