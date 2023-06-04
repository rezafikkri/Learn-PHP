<?php

class Student
{
    public string $id;
    public string $nama;
    public int $value;
    private string $sample;

    public function setSample($sample)
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id: $this->id, nama: $this->nama, value: $this->value";
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->nama,
            "value" => $this->value
        ];
    }
}
