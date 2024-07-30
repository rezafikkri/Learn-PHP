<?php

class Manager
{
    private function test(int $age): bool
    {
        return false;
    }
}

class VicePrecident extends Manager
{
    public function test(string $name): string
    {
        return "";
    }
}
