<?php
// Définition de la fonction calcule
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur: Division par zéro";
            }
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur: Division par zéro";
            }
        default:
            return "Erreur: Opération invalide";
    }
}

// Appel de la fonction calcule avec différents paramètres et affichage des résultats
echo calcule(10, '+', 5) . "<br>";  // Devrait afficher 15
echo calcule(10, '-', 5) . "<br>";  // Devrait afficher 5
echo calcule(10, '*', 5) . "<br>";  // Devrait afficher 50
echo calcule(10, '/', 5) . "<br>";  // Devrait afficher 2
echo calcule(10, '%', 5) . "<br>";  // Devrait afficher 0
echo calcule(10, '/', 0) . "<br>";  // Devrait afficher "Erreur: Division par zéro"
echo calcule(10, 'x', 5) . "<br>";  // Devrait afficher "Erreur: Opération invalide"
?>
