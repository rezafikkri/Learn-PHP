<?php

class Data implements IteratorAggregate
{
    public string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ]);
    } 
}

$data = new Data();

foreach ($data as $property => $val) {
    echo "$property : $val" . PHP_EOL;
}
