<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat Maison</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
<?php
function drawHouse($largeur, $hauteur) {
    // Dessiner le toit
    $roofHeight = ceil($largeur / 2);
    for ($i = 1; $i <= $roofHeight; $i++) {
        echo str_repeat('&nbsp;', $roofHeight - $i);
        echo str_repeat('*', 2 * $i - 1);
        echo "<br>";
    }
    
    // Dessiner les murs
    for ($i = 0; $i < $hauteur; $i++) {
        echo '|';
        echo str_repeat('&nbsp;', $largeur - 2);
        echo '|<br>';
    }

    // Dessiner le sol
    echo str_repeat('-', $largeur);
    echo "<br>";
}

if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);
    
    if ($largeur > 1 && $hauteur > 0) {
        drawHouse($largeur, $hauteur);
    } else {
        echo "Veuillez entrer des valeurs valides pour la largeur et la hauteur.";
    }
} else {
    echo "Aucune valeur reçue.";
}
?>
</body>
</html>
