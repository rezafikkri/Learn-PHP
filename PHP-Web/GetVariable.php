<?php
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$say = 'Halo, my name is ' . $name . ', i am ' . $age . ' years old.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Variable</title>
</head>
<body>
    <h1><?= $say ?></h1>
</body>
</html>
