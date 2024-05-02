<?php

namespace RezaFikkri\PHPUnitTest\Test;

use PHPUnit\Framework\TestCase;
use RezaFikkri\PHPUnitTest\Math;

class MathTest extends TestCase
{
    // public function testSum(): void
    // {
    //     $this->assertEquals(10, Math::sum([5, 5]));
    //     $this->assertEquals(20, Math::sum([4, 4, 4, 4, 4]));
    //     $this->assertEquals(9, Math::sum([3, 3, 3]));
    //     $this->assertEquals(0, Math::sum([]));
    //     $this->assertEquals(2, Math::sum([2]));
    // }

    public static function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[4, 4, 4, 4, 4], 20],
            [[3, 3, 3], 9],
            [[], 0],
            [[2], 2]
        ];
    }

    /**
     * Complex use dataProvider, simple use testWith
     * @dataProvider mathSumData
     */
    public function testSumProvider(array $values, int $expected): void
    {
        $this->assertEquals($expected, Math::sum($values));
    }

    /**
     * @testWith [[5, 5], 10]
     *           [[4, 4, 4, 4, 4], 20]
     *           [[3, 3, 3], 9]
     *           [[], 0]
     *           [[2], 2]
     */
    public function testWith(array $values, int $expected): void
    { 
        $this->assertEquals($expected, Math::sum($values));
    }
}
