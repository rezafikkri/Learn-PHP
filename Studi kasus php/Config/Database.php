<?php

namespace Config;

use PDO;
use PDOException;

class Database
{
    static public function getConnection(): PDO|false
    {
        $host = "localhost";
        $port = "3306";
        $database = "belajar_php_todolist";
        $username = "reza";
        $password = "reza";
        
        try {
            return new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
        } catch (PDOException $pe) {
            echo $pe->getMessage();
            return false;
        } 
    }
}
