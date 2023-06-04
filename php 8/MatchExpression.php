<?php

/* $value = "A";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
} */

/* $value = "A";

$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin anda salah jurusan",
    default => "Nilai apa itu?",
}; */

/* $age = 22;
$result = match (true) {
    $age >= 65 => "A",
    $age >= 25 => "B",
    $age >= 18 => "C",
    default => "D",
}; */

$name = "Mrs. Reza";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Man",
    default => "Hello",
};

echo $result . PHP_EOL;
