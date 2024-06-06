<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats POST</title>
</head>
<body>
<?php
// Vérifier si des arguments POST sont présents
if (isset($_POST) && !empty($_POST)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir et afficher les arguments POST et leurs valeurs
    foreach ($_POST as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun argument POST reçu.";
}
?>
</body>
</html>
