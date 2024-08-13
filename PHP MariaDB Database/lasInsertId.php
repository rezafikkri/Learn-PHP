<?php

include __DIR__ . '/getConnection.php';

$dbh = getConnection();

$dbh->exec("INSERT INTO comment (email, comment) VALUES ('Reza@test.com', 'Hay')");
$id = $dbh->lastInsertId();

echo $id . PHP_EOL;
