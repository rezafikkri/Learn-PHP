<?php

namespace PHP81;

use Exception;

interface Indonesia
{
    public function inIndonesia(): string;
    public static function fromIndonesia(string $value): Gender;
}

enum Gender: string implements Indonesia
{
    case Male = "Mr";
    case Female = "Mrs";

    public function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya",
        };
    }

    public static function fromIndonesia(string $value): Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            default => throw new Exception("Unsupported Indonesian Value"),
        };
    }
}

class Customer
{
    public function __construct(
        public string $id,
        public string $name,
        public ?Gender $gender,
    ) {
        
    }
}

function sayHello(Customer $customer): string
{
    if ($customer->gender == null) {
        return "Hello $customer->name";
    } else {
        return "Hello {$customer->gender->inIndonesia()} $customer->name";
    }
}

var_dump(Gender::from("Mr"));

echo sayHello(new Customer("1", "Reza", Gender::from("Mr"))) . PHP_EOL;
echo sayHello(new Customer("2", "Adel", Gender::from("Mrs"))) . PHP_EOL;
echo sayHello(new Customer("3", "A", Gender::tryFrom("Tes"))) . PHP_EOL;

var_dump(Gender::cases());

var_dump(Gender::fromIndonesia("Tuan"));
var_dump(Gender::fromIndonesia("Nyonya"));
// var_dump(Gender::fromIndonesia("Salah")); // Error
