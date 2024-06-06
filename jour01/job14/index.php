<?php
// Définition de la fonction convertToLeetSpeak
function convertToLeetSpeak($str) {
    // Tableau des correspondances leet speak
    $leet = array(
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7',
        'L' => '1', 'l' => '1',
        'B' => '8', 'b' => '8'
    );

    // Conversion de la chaîne en leet speak
    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if (array_key_exists($str[$i], $leet)) {
            $leetStr .= $leet[$str[$i]];
        } else {
            $leetStr .= $str[$i];
        }
    }

    return $leetStr;
}

// Exemple d'utilisation de la fonction convertToLeetSpeak
$originalStr = "Bonjour La Plateforme!";
$leetStr = convertToLeetSpeak($originalStr);
echo "Chaîne originale : " . $originalStr . "<br>";
echo "Leet speak : " . $leetStr;
?>
