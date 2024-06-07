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
        SELECT salle.nom AS salle_nom, etage.nom AS etage_nom
        FROM salle
        JOIN etage ON salle.id_etage = etage.id
    ");

    // Récupérer toutes les lignes de la table
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nom des salles et leurs étages</title>
    <style>
        table {
            width: 100%;
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
    <h1>Nom des salles et leurs étages</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la Salle</th>
                <th>Nom de l'Étage</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultats as $resultat) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($resultat['salle_nom']); ?></td>
                    <td><?php echo htmlspecialchars($resultat['etage_nom']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>