<?php

session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: member.php");
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'reza' && $_POST['password'] == 'reza') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'reza';
        header('Location: member.php');
        exit;
    } else {
        $error = 'Login gagal';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php if (!empty($error)) : ?>
        <h2><?= $error ?></h2>
        <?php endif ?>

        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username">username</label>
            <input type="text" id="username" name="username"/><br/>
            <label for="password">password</label>
            <input type="text" id="password" name="password"/>
            <button type="submit">login</button>
        </form>
    </body>
</html>
