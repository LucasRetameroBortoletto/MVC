<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de usuarios</title>
</head>
<body>
    <h1>lista de usuarios</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID: </th>
            <th>Nome: </th>
            <th>Email: </th>
        </tr>

        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
            </tr>
        <?php endforeach ;?>
    </table>
</body>
</html>