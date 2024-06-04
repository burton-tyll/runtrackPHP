<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Envoyer">
        <?php
        $i = 0;
        foreach ($_POST as $element) {
            $i++;
            var_dump($element);
        }
        var_dump('Le formulaire contient ' . $i . ' informations');
        ?>
    </form>
</body>

</html>