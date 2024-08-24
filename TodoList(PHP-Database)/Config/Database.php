<?php

namespace PHPDB\Config;

use PDO;
use PDOException;

class Database
{
    static public function getConnection(): PDO|false
    {
        try {
            return new PDO('mysql:host=localhost;port=3306;dbname=belajar_php_todolist', 'reza', 'reza');
        } catch (PDOException $pe) {
            echo $pe->getMessage();
            return false;
        }
    }
}
