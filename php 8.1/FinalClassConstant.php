<?php

class Foo
{
    final public const XX = "foo";
}

const ZZ = "zz";
class Bar extends Foo
{
    // public const XX = "bar"; // error

    public function getZZ(): string
    {
        return ZZ;
    }
}

$bar = new Bar;
var_dump(Bar::XX);
var_dump($bar->getZZ());
