<?php

function stop(): never
{
    echo "Stop" . PHP_EOL;
    die();
}

var_dump(stop()); // null

echo "haha" . PHP_EOL;
