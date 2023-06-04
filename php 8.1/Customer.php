<?php

interface SayHello
{
    function sayHello(): string;
}

trait IndonesiaGender
{
    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya",
        };
    }   
}

enum Gender: string implements SayHello
{
    use IndonesiaGender;

    case Male = "Mr.";
    case Female = "Mrs.";

    const UNKNOWN = "Unknown";

    function sayHello(): string
    {
        return "Hello " . $this->value;
    }

    static function fromIndonesia(string $value): ?Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            default => throw new Exception("Unsupported Indonesian value"),
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
    return $customer->gender == null ? "Hello " . $customer->name : "Hello " . $customer->gender->value . $customer->name;
}
