<?php

namespace Helper;

class MathHelper
{
    public static string $name = "MathHelper";

    public static function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $n) {
            $total += $n;
        }
        return $total;
    }
}
