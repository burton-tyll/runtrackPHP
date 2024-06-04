<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <?php
    if ($_POST && !empty($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (($username == 'John' || $username == 'john') && ($password == 'Rambo' || $password == 'rambo')) {
            echo 'C\'était pas ma guerre';
        } else {
            echo 'Votre pire cauchemar';
        }
    }
    ?>
</body>

</html>