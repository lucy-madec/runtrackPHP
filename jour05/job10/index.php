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
        SELECT SUM(capacite) AS capacite_totale
        FROM salle
    ");

    // Récupérer la capacité totale des salles
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    $capacite_totale = $resultat['capacite_totale'];

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capacité totale des salles</title>
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
    <h1>Capacité totale des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacité totale des salles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $capacite_totale; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
