<?php

include './getConnection.php';

$dbh = getConnection();

$username = "admin";
$password = "admin";

$sql = 'SELECT * FROM admin WHERE username = :username AND password = :password';
$sth = $dbh->prepare($sql);
$sth->execute([ ':username' => $username, ':password' => $password ]);

$user = $sth->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
    echo "Login gagal";
} else {
    echo "Login success . $user[username]";
}

$sth = null;
$dbh = null;
