<?php
// Afficher les nombres de 0 à 100 avec des conditions spécifiques
for ($i = 0; $i <= 100; $i++) {
    // Si le nombre est 42, afficher "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        // Si le nombre est entre 0 et 20, écrire en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Si le nombre est compris entre 25 et 50, souligner le nombre
        echo "<u>$i</u><br>";
    } else {
        // Afficher le nombre normalement
        echo "$i<br>";
    }
}
?>
