<?php

namespace PHP8;

function katakanHalo(string $first, string $middle = "", string $last = ""): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

katakanHalo(last: "Fikri", first: "Reza");
