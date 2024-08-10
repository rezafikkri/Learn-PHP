<?php

include 'getConnection.php';

$dbh = getConnection();

$sql = 'SELECT * FROM customers';
$sth = $dbh->query($sql, PDO::FETCH_ASSOC);
$sth2 = $dbh->query('SELECT name, email FROM customers', PDO::FETCH_ASSOC);

foreach ($sth as $u) {
    // var_dump($u);
}

var_dump($sth2->fetchAll());

$sth2 = null;
$sth = null;
$dbh = null;
