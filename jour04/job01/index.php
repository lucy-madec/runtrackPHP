<?php
session_start();

// Initialisation ou incrémentation du compteur de visites
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
} else {
    $_SESSION['nbVisites']++;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?= $_SESSION['nbVisites'] ?></p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>