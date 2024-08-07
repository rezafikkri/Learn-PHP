<?php

class Data implements IteratorAggregate
{
    public string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";

    public function getIterator(): Iterator
    {
        // return new ArrayIterator([
        //     "first" => $this->first,
        //     "second" => $this->second,
        //     "third" => $this->third,
        //     "forth" => $this->forth,
        // ]);

        // Using generator
        yield "first" => $this->first;
        yield "second"=> $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    } 
}

$data = new Data();

foreach ($data as $property => $val) {
    echo "$property : $val" . PHP_EOL;
}
