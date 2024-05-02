<?php

include "getConnection.php";

$dbh = getConnection();

$sql = <<<SQL
INSERT INTO customers(id, name, email)
VALUES('adel', 'adel', 'adel@gmail.com')
SQL;

$dbh->exec($sql);

$dbh = null;
