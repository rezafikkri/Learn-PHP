<?php

include 'getConnection.php';

$dbh = getConnection();

$dbh->beginTransaction();

$dbh->exec("INSERT INTO comment (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comment (email, comment) VALUES ('dian@test.com', 'hai')");
$dbh->exec("INSERT INTO comment (email, comment) VALUES ('dian@test.com', 'hai')");

$dbh->commit();
// $dbh->rollBack();

$dbh = null;
