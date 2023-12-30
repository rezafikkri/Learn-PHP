<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form post</title>
    </head>
    <body>
        <table>
            <tr>
                <th>First Name</th>
                <td><?= htmlspecialchars($_POST['first-name']) ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?= htmlspecialchars($_POST['last-name']) ?></td>
            </tr>
        </table>
    </body>
</html>
