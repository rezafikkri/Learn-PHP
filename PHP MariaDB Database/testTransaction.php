<?php

include 'getConnection.php';

$dbh = getConnection();

$dbh->beginTransaction();

$dbh->exec("INSERT INTO comments (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comments (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comments (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comments (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comments (email, comment) VALUES ('dian@test.com', 'hai')");

$dbh->rollBack();

$dbh = null;
