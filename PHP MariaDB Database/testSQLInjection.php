<?php

include 'getConnection.php';

$dbh = getConnection();

$username = $dbh->quote("rezafikkri'; #");
$password = $dbh->quote("admin");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

$stmt = $dbh->query($sql);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
    echo "Login gagal";
} else {
    echo "Login success . $user[username]";
}

$stmt = null;
$dbh = null;
