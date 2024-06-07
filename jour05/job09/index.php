<?php
$dsn = 'mysql:host=localhost;dbname=jour05;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<?php
// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=jour05;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer et exécuter la requête SQL
    $stmt = $pdo->query("
        SELECT SUM(superficie) AS superficie_totale
        FROM etage
    ");

    // Récupérer la superficie totale des étages
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    $superficie_totale = $resultat['superficie_totale'];

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Superficie totale des étages</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Superficie totale des étages</h1>
    <table>
        <thead>
            <tr>
                <th>Superficie totale des étages</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $superficie_totale; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
