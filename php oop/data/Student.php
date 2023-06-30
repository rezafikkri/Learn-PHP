<?php

namespace Data;

class Student
{
    public string $name;
    public int $age = 22;
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
    
    public function __toString(): string
    {
        return "Student name: $this->name, age: $this->age, value: $this->value" . PHP_EOL;
    }

    public function __invoke(...$arguments): void
    {
        echo "Invoke student with argumets " . join(",", $arguments) . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "author" => "Reza",
            "version" => "1.0.0",
            "id" => 1,
            "name" => $this->name,
            "age" => $this->age,
        ];
    }
}
