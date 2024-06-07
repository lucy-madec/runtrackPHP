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
        SELECT AVG(capacite) AS capacite_moyenne
        FROM salle
    ");

    // Récupérer la capacité moyenne des salles
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    $capacite_moyenne = $resultat['capacite_moyenne'];

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capacité moyenne des salles</title>
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
    <h1>Capacité moyenne des salles</h1>
    <table>
        <thead>
            <tr>
                <th>Capacité moyenne</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo number_format($capacite_moyenne, 2); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
