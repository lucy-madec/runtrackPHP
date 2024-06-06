<?php
// Définition de la fonction bonjour
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction bonjour avec le paramètre true
bonjour(true);
echo "<br>";

// Appel de la fonction bonjour avec le paramètre false
bonjour(false);
?>
