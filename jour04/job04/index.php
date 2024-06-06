<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["prenom"])) {
    // Stocker le prénom dans un cookie
    setcookie('prenom', $_POST["prenom"], time() + 3600);
    // Rediriger vers la même page pour éviter la soumission multiple du formulaire
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

// Vérifier si l'utilisateur est connecté (prénom stocké dans le cookie)
$connecte = false;
$prenom = '';
if (isset($_COOKIE['prenom'])) {
    $connecte = true;
    $prenom = $_COOKIE['prenom'];
}

// Si l'utilisateur se déconnecte, supprimer le cookie
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    // Rediriger vers la même page pour éviter la soumission multiple du formulaire
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>

<body>
    <?php if ($connecte) : ?>
        <h1>Bonjour <?= $prenom ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else : ?>
        <h1>Formulaire de Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>

</html>
