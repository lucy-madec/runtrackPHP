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
        SELECT COUNT(*) AS nb_etudiants
        FROM etudiant
    ");
    $stmt->execute();

    // Récupérer le nombre total d'étudiants
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    $nb_etudiants = $resultat['nb_etudiants'];

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre total d'étudiants</title>
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
    <h1>Nombre total d'étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nb_etudiants; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
