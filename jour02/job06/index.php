<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat Nombre</title>
</head>
<body>
<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    
    if (is_numeric($nombre)) {
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
} else {
    echo "Aucun nombre reçu.";
}
?>
</body>
</html>
