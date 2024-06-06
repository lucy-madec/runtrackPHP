<?php
// Afficher les nombres de 1 à 100 avec des remplacements spécifiques
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Si le nombre est un multiple de 3 et de 5, afficher "FizzBuzz"
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        // Si le nombre est un multiple de 3, afficher "Fizz"
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        // Si le nombre est un multiple de 5, afficher "Buzz"
        echo "Buzz<br>";
    } else {
        // Sinon, afficher le nombre normalement
        echo "$i<br>";
    }
}
?>
