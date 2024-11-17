<?php

namespace PHP81\BackedEnum;

enum Gender: string
{
    case Male = 'Mr';
    case Female = 'Mrs';
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
    return "Hello {$customer->gender->value}.$customer->name" . PHP_EOL;
}

echo sayHello(new Customer('Reza', Gender::Male));
echo sayHello(new Customer('Adelina', Gender::from('Mrs')));
