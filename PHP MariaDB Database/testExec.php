<?php

require_once "getConnection.php";

$dbh = getConnection();

$sql = <<<SQL
INSERT INTO customers(name, email)
VALUES('adel', 'adel@gmail.com')
SQL;

$dbh->exec($sql);

$dbh = null;
