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
    $stmt = $pdo->prepare("
        SELECT *
        FROM etudiant
        WHERE DATEDIFF(CURDATE(), naissance) < 365.25 * 18
    ");
    $stmt->execute();

    // Récupérer toutes les lignes de la table
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    $stmt = $pdo->prepare("
        SELECT *
        FROM etudiant
        WHERE DATEDIFF(CURDATE(), naissance) < 365.25 * 18
    ");
    $stmt->execute();

    // Récupérer toutes les lignes de la table
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants de moins de 18 ans</title>
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
    <h1>Liste des étudiants de moins de 18 ans</h1>
    <table>
        <thead>
            <tr>
                <?php if (!empty($etudiants)) : ?>
                    <?php foreach (array_keys($etudiants[0]) as $colonne) : ?>
                        <th><?php echo htmlspecialchars($colonne); ?></th>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant) : ?>
                <tr>
                    <?php foreach ($etudiant as $valeur) : ?>
                        <td><?php echo htmlspecialchars($valeur); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
