<?php
// Vérifier si des arguments GET sont présents
if (isset($_GET) && !empty($_GET)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcourir et afficher les arguments GET et leurs valeurs
    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aucun argument GET reçu.";
}
?>
