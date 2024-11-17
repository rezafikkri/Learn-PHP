<?php

namespace PHP81;

enum Gender
{
    case Male;
    case Female;
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
    if ($customer->gender === Gender::Male) {
        return "Hello Mr.$customer->name" . PHP_EOL;
    } else if ($customer->gender === Gender::Female) {
        return "Hello Mrs.$customer->name" . PHP_EOL;
    } else {
        return "Hello $customer->name" . PHP_EOL;
    }
}

$customer = new Customer('Reza', Gender::Male);
echo sayHello($customer);

var_dump(Gender::cases());
