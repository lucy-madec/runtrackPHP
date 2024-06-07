<?php
session_start();

// Initialiser ou réinitialiser le plateau de jeu
function initBoard() {
    return [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}

// Vérifier si un joueur a gagné
function checkWin($board) {
    // Vérifier les lignes, colonnes et diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] != '-' && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) return $board[$i][0];
        if ($board[0][$i] != '-' && $board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) return $board[0][$i];
    }
    if ($board[0][0] != '-' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) return $board[0][0];
    if ($board[0][2] != '-' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) return $board[0][2];

    return null;
}

// Vérifier si le plateau est plein (match nul)
function isFull($board) {
    foreach ($board as $row) {
        if (in_array('-', $row)) {
            return false;
        }
    }
    return true;
}

// Initialiser la session si nécessaire
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = initBoard();
    $_SESSION['turn'] = 'X';
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    $_SESSION['board'] = initBoard();
    $_SESSION['turn'] = 'X';
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Gérer le clic sur une case du plateau
if (isset($_POST['cell'])) {
    list($row, $col) = explode('-', $_POST['cell']);
    if ($_SESSION['board'][$row][$col] == '-') {
        $_SESSION['board'][$row][$col] = $_SESSION['turn'];
        $_SESSION['turn'] = $_SESSION['turn'] == 'X' ? 'O' : 'X';
    }
}

// Vérifier l'état du jeu
$winner = checkWin($_SESSION['board']);
if ($winner) {
    $message = "$winner a gagné !";
    $_SESSION['board'] = initBoard();
    $_SESSION['turn'] = 'X';
} elseif (isFull($_SESSION['board'])) {
    $message = "Match nul !";
    $_SESSION['board'] = initBoard();
    $_SESSION['turn'] = 'X';
} else {
    $message = "C'est au tour de " . $_SESSION['turn'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        td {
            width: 60px;
            height: 60px;
            text-align: center;
            border: 1px solid black;
        }
        button {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Jeu du Morpion</h1>
    <p style="text-align: center;"><?= $message ?></p>
    <form method="post" style="text-align: center;">
        <table>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++) : ?>
                        <td>
                            <?php if ($_SESSION['board'][$i][$j] == '-') : ?>
                                <button type="submit" name="cell" value="<?= $i . '-' . $j ?>"><?= $_SESSION['board'][$i][$j] ?></button>
                            <?php else : ?>
                                <?= $_SESSION['board'][$i][$j] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>

</html>
