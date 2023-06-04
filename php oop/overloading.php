<?php

class Zero
{
    private $data = [];

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($name);
    }

    public function __call($name, $arguments)
    {
        $join = join(',', $arguments);
        echo "Call function $name with argumets $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(',', $arguments);
        echo "Call static function $name with argumets $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = 'Reza';
$zero->middleName = 'Sariful';
$zero->lastName = 'Fikri';

/* echo "First name : $zero->firstName" . PHP_EOL;
echo "Middle name : $zero->middleName" . PHP_EOL;
echo "Last name : $zero->lastName" . PHP_EOL; */

$zero->sayHello('Reza', 'Sariful');
Zero::sayHello('Reza', 'FIkri');
