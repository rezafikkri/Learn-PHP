<?php

namespace RezaFikkri\PHPUnit;

use Exception;
use PHPUnit\Framework\Attributes\Before;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private ?Person $person;

    protected function setUp(): void
    {
    }

    #[Before()]
    public function createPerson(): void
    {
        $this->person = new Person('Reza');
    }

    public function testSayHello(): void
    {
        $say = $this->person->sayHello('Adelina');
        $this->assertEquals('Hello Adelina, my name is Reza', $say);
    }

    public function testSayHelloWithInvalidNameArgument(): void
    {
        $this->expectException(Exception::class);
        $this->person->sayHello('');
    }

    public function testSayGoodBye(): void
    {
        $this->expectOutputString('Good bye Dea' . PHP_EOL);
        $this->person->sayGoodBye('Dea');
    }
}
