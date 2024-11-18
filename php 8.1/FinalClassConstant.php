<?php

class Foo
{
    public const XX = 'foo';
    final public const ZZ = 'foozzz';
}

class Bar extends Foo
{
    public const XX = 'bar';
    // public const ZZ = 'barzzz'; // error

    public function getXX(): string
    {
        return self::XX;
    }
}

$bar = new Bar;
var_dump(Bar::XX);
var_dump($bar->getXX());
