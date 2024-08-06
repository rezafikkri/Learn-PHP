<?php

function input(string $info): string
{
    echo "$info : ";
    return trim(fgets(STDIN));
}
