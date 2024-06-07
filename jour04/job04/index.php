<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        setcookie('prenom', $prenom);
        echo ('Bonjour ' . $prenom . '<br>');
        echo ('
            <form action="index.php" method="POST">
                <button type="submit" name="deco">Déconnexion</button>
            </form>');
    } elseif (isset($_POST['deco'])) {
        echo ('
            <form action="index.php" method="POST">
                <input type="text" name="prenom" placeholder="prenom"><br>
                <button type="submit">Connexion</button>
            </form>
            ');
    } else {
        echo ('
            <form action="index.php" method="POST">
                <input type="text" name="prenom" placeholder="prenom"><br>
                <button type="submit">Connexion</button>
            </form>
            ');
    }
    ?>

</body>

</html>