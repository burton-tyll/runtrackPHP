<?php
$host = 'localhost';
$db  = 'jour05';
$username = 'root';
$password = '';

try {
    //connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Permet d'afficher les erreurs et de deboguer

    //Requête SQL puis préparation des données avant envoi
    $etudiants = 'SELECT COUNT(*) AS nb_etudiants FROM etudiants';
    $stmt = $pdo->prepare($etudiants);
    $stmt->execute();

    // Récupérer les résultats
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Gestion des erreurs
    echo 'Erreur : ' . $e->getMessage();
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100svh;
            padding: 0;
            margin: 0;
        }

        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($results)) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($results['nb_etudiants']) ?></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>