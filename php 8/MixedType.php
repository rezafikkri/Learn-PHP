<?php

function testMixed(mixed $data): mixed
{
    return match (true) {
        is_array($data) => [],
        is_string($data) => "string",
        is_int($data) => 1,
        default => null
    };
}

var_dump(testMixed([]));
