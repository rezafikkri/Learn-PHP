<?php

namespace RezaFikkri\PHPUnit;

use Exception;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testSayHello(): void
    {
        $person = new Person('Reza');
        $say = $person->sayHello('Adelina');
        $this->assertEquals('Hello Adelina, my name is Reza', $say);
    }

    public function testSayHelloWithInvalidNameArgument(): void
    {
        $this->expectException(Exception::class);
        $person = new Person('Reza');
        $person->sayHello('');
    }
}
