<?php
// Fonction pour mettre en gras les mots commençant par une majuscule
function gras($str) {
    return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
}

// Fonction pour chiffrer une chaîne avec le chiffre de César
function cesar($str, $shift = 2) {
    $result = '';
    $shift = $shift % 26;
    for ($i = 0; $i < strlen($str); $i++) {
        $ascii = ord($str[$i]);
        if ($ascii >= 65 && $ascii <= 90) {
            // Lettre majuscule
            $result .= chr(($ascii - 65 + $shift) % 26 + 65);
        } elseif ($ascii >= 97 && $ascii <= 122) {
            // Lettre minuscule
            $result .= chr(($ascii - 97 + $shift) % 26 + 97);
        } else {
            // Autres caractères
            $result .= $str[$i];
        }
    }
    return $result;
}

// Fonction pour ajouter un "_" aux mots finissant par "me"
function plateforme($str) {
    return preg_replace('/\b(\w*me)\b/', '$1_', $str);
}

// Traitement du formulaire
$result = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['str'];
    $option = $_POST['option'];
    
    if ($option == 'gras') {
        $result = gras($str);
    } elseif ($option == 'cesar') {
        $shift = isset($_POST['shift']) ? intval($_POST['shift']) : 2;
        $result = cesar($str, $shift);
    } elseif ($option == 'plateforme') {
        $result = plateforme($str);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Transformation de chaîne</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required>
        <br><br>
        <label for="option">Transformation :</label>
        <select id="option" name="option" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br><br>
        <label for="shift">Décalage (pour César) :</label>
        <input type="number" id="shift" name="shift" value="2">
        <br><br>
        <button type="submit">Valider</button>
    </form>
    
    <?php
    if ($result) {
        echo "<h2>Résultat :</h2>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
