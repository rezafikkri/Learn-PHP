<?php

include __DIR__ . '/getConnection.php';

$dbh = getConnection();

$username = "admin";
$password = "admin";

$sql = 'DELETE FROM admin WHERE username = :username AND password = :password';
$sth = $dbh->prepare($sql);
$sth->execute([ ':username' => $username, ':password' => $password ]);

$stmt = $dbh->prepare("SELECT * FROM admin WHERE username != :username");
$stmt->execute([':username' => 'admin']);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($user);
echo $user['username'];

$sth = null;
$dbh = null;
