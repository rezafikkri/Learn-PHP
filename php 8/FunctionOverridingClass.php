<?php

namespace PHP8;

class ParentClass
{
    private function method(string $name, int $age): string
    {
        return "";
    }
}

class ChildClass extends ParentClass
{
    protected function method(string $name, int $age): string
    {
        return "";
    }
}

// Urutan parameter, type parameter, jumlah paramater, return type tidak bisa diubah
// Untuk visibility, jika diparent adalah protected, maka di child class hanya bisa diubah menjadi public. Begitupun ketika di parent class adalah private maka di child class bisa protected atau public.
