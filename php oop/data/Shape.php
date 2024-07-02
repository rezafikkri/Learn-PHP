<?php

class Shape
{
    protected string $type = "Segitiga";

    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public string $type = 'Rectangle';

    public function getCorner()
    {
        return 4;   
    }

    public function getParentCorner()
    {
        return parent::getCorner();
    }
}
