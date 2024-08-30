<?php

$numbers = $_GET['numbers'];
$num = 0;

foreach ($numbers as $number) {
    $num += $number;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Multiple Variable</title>
</head>
<body>
    <h1>Total: <?= $num ?></h1>
</body>
</html>
