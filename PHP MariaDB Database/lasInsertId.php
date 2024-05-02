<?php

include __DIR__ . '/getConnection.php';

$dbh = getConnection();

$dbh->exec("INSERT INTO comments (email, comment) VALUES ('Reza@test.com', 'Hay')");
$id = $dbh->lastInsertId();

echo $id;
