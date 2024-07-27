<?php

namespace PHP8;

class Example
{
    public string|int|bool $data;
}

$example = new Example;
$example->data = 12;
// $example->data = false;
var_dump($example);

function sample(string|array|bool $data): string|array|false
{
    if (is_string($data)) {
        return "string";
    } elseif (is_array($data)) {
        return ["array"];
    } elseif (is_bool($data)) {
        return false;
    }
}

// var_dump(sample(12));
// var_dump(sample([]));
// var_dump(sample(false));
