<?php

include 'getConnection.php';

$dbh = getConnection();

$sql = "SELECT * FROM customers";
$sth = $dbh->query($sql, PDO::FETCH_ASSOC);

foreach($sth as $u) {
    var_dump($u);
}

$sth = null;
$dbh = null;
