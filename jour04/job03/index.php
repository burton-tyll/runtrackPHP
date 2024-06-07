<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <input type="text" placeholder="Entrez un prénom" name="prenom">
        <button type="submit">Réinitialiser la liste</button>
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['prenom'])) {
        $_SESSION['prenom'] = [];
    }
    if (isset($_GET['prenom'])) {
        $_SESSION['prenom'][] = $_GET['prenom'];
    }
    ?>
    <ul>
        <?php
        foreach ($_SESSION['prenom'] as $prenom) {
            echo ('<li>' . $prenom . '</li>');
        }
        ?>
    </ul>
</body>

</html>