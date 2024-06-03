<?php

$text = 'Bonjour';
$entier = 2;
$decimal = 0.3;
$booleen = true;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= gettype($text) ?></td>
                <td>Text</td>
                <td><?php echo ($text) ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($entier) ?></td>
                <td>Entier</td>
                <td><?php echo ($entier) ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($decimal) ?></td>
                <td>Decimal</td>
                <td><?php echo ($decimal) ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($booleen) ?></td>
                <td>Booleen</td>
                <td><?php echo ($booleen) ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>