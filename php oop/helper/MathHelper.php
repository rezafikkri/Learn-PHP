<?php

namespace Helper;

class TestStatic
{

}

class MathHelper
{
    public static TestStatic $testStatic;

    public static string $name = "MathHelper";

    public static function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $n) {
            $total += $n;
        }
        return $total;

        // This is will be error
        // $this->devide();
    }

    public function divide(): int
    {
        // This is not error
        return static::sum(2, 4, 2);
    }
}
