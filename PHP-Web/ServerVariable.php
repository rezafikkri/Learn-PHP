<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>$_SERVER</h1>
        <table>
            <?php foreach ($_SERVER as $key => $val) : ?>
            <tr>
                <td><?= $key ?></td>
                <td>:</td>
                <td><?= $val ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html
