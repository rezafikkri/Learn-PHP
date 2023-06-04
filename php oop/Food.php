<?php

namespace Data;

class Food
{

}

class AnimalFood extends Food
{
    public function __destruct()
    {
        echo "Destruct" . PHP_EOL;
    }
}

$aFood = new AnimalFood();
