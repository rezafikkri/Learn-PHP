<?php

function getConnection(): PDO|false {
    try {
        return new PDO("mysql:host=localhost;port=3306;dbname=belajar_php", "reza", "reza");
    } catch (PDOException $pe) {
        echo $pe->getMessage();
        return false;
    }
}
