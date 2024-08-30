<?php
    $title = 'Ini adalah integrasi HTML';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        input {
            display: block;
            margin-bottom: 2px;
        }
        </style>
    </head>
    <body>
        <form method="post" action="post.php">
            <label for="first-name">First name</label>
            <input type="text" id="first-name" name="first-name"/>
            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="last-name"/>
            <button type="submit">Sumbit</button>
        </form>
    </body>
</html>
