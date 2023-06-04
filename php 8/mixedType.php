<?php

function testMixed(mixed $data): mixed
{
    if (is_array($data)) {
        return "Array";
    } else if (is_string($data)) {
        return "String";
    } else if (is_int($data)) {
        return "Integer";
    } else {
        return "Null";
    }
}

var_dump(testMixed(['Reza']));
