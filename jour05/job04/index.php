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
    $salle = 'SELECT * FROM salle';
    $stmt = $pdo->prepare($salle);
    $stmt->execute();

    // Récupérer les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                <td>Nom</td>
                <td>Capacité</td>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($results)) : ?>
                <?php foreach ($results as $row) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['nom']) ?></td>
                        <td><?php echo htmlspecialchars($row['capacite']) ?></td>
                    </tr>
                <?php endforeach;                ?>
            <?php else :                ?>
                <tr>
                    <td colspan="6">Aucun étudiant trouvé.</td>
                </tr>
            <?php endif            ?>
        </tbody>
    </table>
</body>

</html>