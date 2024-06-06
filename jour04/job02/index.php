<?php
// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    setcookie('nbVisites', 0, time() + 3600); // Réinitialiser le cookie à 0
    $_COOKIE['nbVisites'] = 0; // Mettre à jour la valeur du cookie dans le script
} else {
    // Incrémenter le compteur de visites
    if (!isset($_COOKIE['nbVisites'])) {
        setcookie('nbVisites', 1, time() + 3600); // Initialiser le cookie à 1
        $_COOKIE['nbVisites'] = 1;
    } else {
        $nbVisites = $_COOKIE['nbVisites'] + 1;
        setcookie('nbVisites', $nbVisites, time() + 3600); // Mettre à jour le cookie
        $_COOKIE['nbVisites'] = $nbVisites;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec Cookie</title>
</head>
<body>
    <h1>Compteur de visites avec Cookie</h1>
    <p>Nombre de visites : <?= $_COOKIE['nbVisites'] ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
