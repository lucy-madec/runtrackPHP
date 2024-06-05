<?php
// afichage de tous les nombres de 0 à 1337 sauf 26, 37, 88, 1111 avec un retour à la ligne entre chaque nombre
for ($i = 0; $i <= 1337; $i++) {
    // Vérification si le nombre est différent de 26, 37, 88, 1111
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111) {
        echo "$i<br>";
    }
}
?>