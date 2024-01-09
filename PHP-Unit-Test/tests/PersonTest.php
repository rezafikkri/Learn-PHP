<?php

namespace RezaFikkri\PHPUnitTest\Test;

use Exception;
use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Person;

class PersonTest extends TestCase
{
    public function testSuccess(): void
    {
        $person = new Person("Reza");
        $this->assertEquals("Hello Adel, my name is Reza", $person->sayHello("Adel"));
    }

    public function testException(): void
    {
        $person = new Person("Reza");
        $this->expectException(Exception::class);
        $person->sayHello(null);
    }
}
