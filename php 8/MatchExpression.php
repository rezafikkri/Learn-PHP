<?php

// $value = "A";

/* switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "C":
        $result = "Mungkin anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu?";
} */

/* $result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "C" => "Mungkin anda salah jurusan",
    default => "Nilai apakah itu?",
}; */

/* $value = 80;
$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E",
}; */

$name = "Mrs. Dea";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello sir",
    str_contains($name, "Mrs.") => "Hello mam",
    default => "Hello",
};

echo $result . PHP_EOL;
