<?php

namespace Data;

trait SayGoogBye
{
    public function goodBye(?string $name = null): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayGoodMorning
{
    public function morning(?string $name = null): void
    {
        if (is_null($name)) {
            echo "Good morning" . PHP_EOL;
        } else {
            echo "Good morning $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    abstract public function run(): void;
}

trait All
{
    use SayGoogBye, SayGoodMorning, HasName, CanRun;
}

class Person
{
    use All {
        morning as protected;
    }

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}

class Reza extends Person
{
    public function morningInReza()
    {
        return $this->morning();
    }
}
