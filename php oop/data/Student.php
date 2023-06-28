<?php

namespace Data;

class Student
{
    public string $name;
    public int $age;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }
}
