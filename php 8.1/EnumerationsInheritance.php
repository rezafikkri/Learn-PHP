<?php

namespace PHP81\EnumerationMethod;

use Error;

interface Translate
{
    public function inIndonesia(): string;
    public static function fromIndonesia(string $value): Gender;
}

trait IndonesiaGender
{
    public function inIndonesia(): string
    {
        return match($this) {
            Gender::Male => 'Tuan',
            Gender::Female => 'Nyonya',
        };
    }
}

enum Gender: string implements Translate
{
    use IndonesiaGender;

    case Male = 'Mr';
    case Female = 'Mrs';

    public static function fromIndonesia(string $value): Gender
    {
        return match($value) {
            'Tuan' => Gender::Male,
            'Nyonya' => Gender::Female,
            default => throw new Error('Unsopported Indonesian Value'),
        };
    }
}

class Customer
{
    public function __construct(
        public string $name,
        public Gender $gender,
    ) {
        
    }
}

function sayHello(Customer $customer): string
{
    return "Hello {$customer->gender->inIndonesia()}.$customer->name" . PHP_EOL;
}

echo sayHello(new Customer('Reza', Gender::Male));
echo sayHello(new Customer('Adelina', Gender::from('Mrs')));

var_dump(Gender::fromIndonesia('Tuan'));
