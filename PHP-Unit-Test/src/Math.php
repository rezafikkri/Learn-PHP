<?php

namespace RezaFikkri\PHPUnitTest;

class Math
{
    public static function sum(array $values): int
    {
        $total = 0;
        foreach ($values as $v) {
            $total += $v;
        }
        return $total;
    }
}
