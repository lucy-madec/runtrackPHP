<?php
// Afficher tous les nombres de 0 à 1337 avec un retour à la ligne entre chaque nombre
for ($i = 0; $i <= 1337; $i++) {
    // Si le nombre est égal à 42, appliquer 42, appliquer un style spécial
    if ($i == 42) {
        echo "<span style='font-weight: bold; text-decoration: underline;'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}
?>