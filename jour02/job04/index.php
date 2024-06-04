<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,
        th {
            border: 1px solid black;
            padding: 15px;
        }

        table {
            border-collapse: collapse;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="text" name="age">
        <input type="submit" value="Envoyer">
    </form>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php
                    echo $_POST['nom']
                    ?></td>
                <td><?php
                    echo $_POST['prenom']
                    ?></td>
                <td><?php
                    echo $_POST['age']
                    ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>