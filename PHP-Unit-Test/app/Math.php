<?php

namespace RezaFikkri\PHPUnit;

class Math
{
    public static function sum(int ...$number): int
    {
        return array_sum($number);
    }
}
