<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <input type="number" name="nombre">
        <input type="submit">
    </form>
    <?php
    if ($_GET && !empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if ($nombre % 2 == 0) {
            echo 'Nombre pair';
        } else {
            echo 'Nombre impair';
        }
    } else {
        echo 'Veuillez entrer un nombre!';
    }

    ?>
</body>

</html>