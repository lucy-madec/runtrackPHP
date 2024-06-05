<?php
// Définition des variables de différents types primitifs
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, world!";
$boolVar = true;
$nullVar = null;

// Génération du tableau HTML
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Type</th>";
echo "<th>Nom</th>";
echo "<th>Valeur</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

echo "<tr>";
echo "<td>Integer</td>";
echo "<td>integerVar</td>";
echo "<td>$integerVar</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Float</td>";
echo "<td>floatVar</td>";
echo "<td>$floatVar</td>";
echo "</tr>";

echo "<tr>";
echo "<td>String</td>";
echo "<td>stringVar</td>";
echo "<td>$stringVar</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Boolean</td>";
echo "<td>boolVar</td>";
echo "<td>" . ($boolVar ? 'true' : 'false') . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Null</td>";
echo "<td>nullVar</td>";
echo "<td>null</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";
?>
