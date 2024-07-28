<?php

namespace PHP8;

class Customer
{
    public function getAddress(): ?Address
    {
        return null;
    }
}

class Address
{
    public function getCountry(): string
    {

    }
}

$country = (new Customer())->getAddress()?->getCountry();
var_dump($country);
