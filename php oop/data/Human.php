<?php

namespace Data;

interface Motor
{
    public function drive(): void;
    public function getTire(): int;
}

class CRF implements Motor
{
    public function drive(): void
    {
        echo "CRF drive" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 2;
    }
}
