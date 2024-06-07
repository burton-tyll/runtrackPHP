<?php

//On vérifie l'existence du cookie
if (isset($_COOKIE['visite'])) {
    $nbVisites = $_COOKIE['visite'];
    $nbVisites += 1;
    setcookie('visite', $nbVisites);
    echo $nbVisites;
} else {
    $nbVisites = 1;
    setcookie('visite', $nbVisites);
    echo $nbVisites;
}

if (isset($_POST['reset'])) {
    setcookie('visite', 0);
    // Redirection après réinitialisation pour éviter la retransmission du formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


?>



<form action="index.php" method="POST">
    <button type="submit" name="reset">Réinitialiser</button>
</form>