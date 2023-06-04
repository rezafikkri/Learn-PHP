<?php

class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Reza";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
    if (is_string($data)) {
        return "Is string";
    } else if (is_array($data)) {
        return ["Is array"];
    }
}

var_dump(sampleFunction("Reza"));
var_dump(sampleFunction([]));
