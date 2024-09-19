<?php

require_once('helper/MathHelper.php');

use Helper\{MathHelper, TestStatic};

// echo MathHelper::$name . PHP_EOL;
// MathHelper::$name = "Reza";
// echo MathHelper::$name . PHP_EOL;
//
// echo MathHelper::sum(1, 2, 3, 4) . PHP_EOL;
// $math = new MathHelper;
// echo $math->divide(). PHP_EOL;
// echo $math->sum(1,2,3) . PHP_EOL;

// $math1 = new MathHelper();
// $testStatic1 = $math1->testStatic = new TestStatic;
//
// $math2 = new MathHelper();
// var_dump($math2->testStatic);// Error, karena ketika class MathHelper di intance lagi, property testStatic
// yang bukan static property, akan dideklarasikan ulang, dan butuh untuk di inisialisasi
// lagi sebelum di akses.

$math1 = new MathHelper();
$testStatic1 = MathHelper::$testStatic = new TestStatic;

$math2 = new MathHelper();
var_dump(MathHelper::$testStatic);// Tidak Error, karena property testStatic adalah static property,
// yang mana static property itu tidak terkait dengan object tetapi dengan class, jadi mau berapa kalipun
// class di-instance, tidak akan mempengaruhi value (nilai) dari si static property. Dari mana tahunya
// kalau si static property terkait dengan class, tidak dengan object? ya karena property static
// itu tidak bisa diakses melalui object hasil instance suatu class, melainkan dia hanya bisa
// diakses melalui class-nya langsung (jika ingin mengakses property static dari luar class).
