<?php

namespace Data;

interface HasBrand
{
    public function getBrand(): string;
}

interface isMaintenance
{
    public function isMaintenance(): bool;
}

interface Motor extends HasBrand
{
    public function drive(): void;
    public function getTire(): int;
}

class CRF implements Motor, isMaintenance
{
    public function drive(): void
    {
        echo "CRF drive" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 2;
    }

    public function isMaintenance(): bool
    {
        return true;
    }

    public function getBrand(): string
    {
        return "Honda";
    }
}
