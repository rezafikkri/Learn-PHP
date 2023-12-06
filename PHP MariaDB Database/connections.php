<?php

try {
    $dbh = new PDO("mysql:host=localhost;port=3306;dbname=belajar_php_database", "reza", "rez");
} catch (\PDOException $pe) {
    echo $pe->getMessage();
}
