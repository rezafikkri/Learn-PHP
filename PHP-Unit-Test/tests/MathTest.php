<?php

namespace RezaFikkri\PHPUnit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public static function mathSumData(): array
    {
        return [
            [4, 2, 2],
            [12, 5, 2, 5],
            [20, 5, 5, 5, 5],
        ];
    }

    #[DataProvider('mathSumData')]
    public function testSum(int $expected, int ...$number): void
    {
        $this->assertEquals($expected, Math::sum(...$number));
    }

    #[TestWith([4, 2, 2])]
    #[TestWith([12, 5, 2, 5])]
    #[TestWith([20, 5, 5, 5, 5])]
    public function testSumWith(int $expected, int ...$number): void
    {
        $this->assertEquals($expected, Math::sum(...$number));
    }
}
