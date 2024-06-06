<?php
session_start();

// Ajouter un prénom à la liste si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
        $_SESSION['prenoms'][] = $_POST["prenom"];
    }

    // Réinitialiser la liste des prénoms si le bouton reset est cliqué
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>

<body>
    <h1>Liste des prénoms</h1>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <h2>Liste des prénoms ajoutés :</h2>
    <ul>
        <?php
        // Afficher tous les prénoms
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>$prenom</li>";
            }
        }
        ?>
    </ul>
</body>

</html>
