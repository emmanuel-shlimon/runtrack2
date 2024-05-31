<?php
session_start();

// Vérifier si la grille est initialisée
if (!isset($_SESSION['grid'])) {
    $_SESSION['grid'] = [
        ['', '', ''],
        ['', '', ''],
        ['', '', '']
    ];
    $_SESSION['currentPlayer'] = 'X'; // Joueur X commence
}

// Fonction pour vérifier s'il y a un gagnant
function checkWinner($grid) {
    // Vérifier les lignes et colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] !== '' && $grid[$i][0] === $grid[$i][1] && $grid[$i][1] === $grid[$i][2]) {
            return $grid[$i][0];
        }
        if ($grid[0][$i] !== '' && $grid[0][$i] === $grid[1][$i] && $grid[1][$i] === $grid[2][$i]) {
            return $grid[0][$i];
        }
    }
    // Vérifier les diagonales
    if ($grid[0][0] !== '' && $grid[0][0] === $grid[1][1] && $grid[1][1] === $grid[2][2]) {
        return $grid[0][0];
    }
    if ($grid[0][2] !== '' && $grid[0][2] === $grid[1][1] && $grid[1][1] === $grid[2][0]) {
        return $grid[0][2];
    }
    return false;
}

// Fonction pour vérifier si la grille est pleine
function checkDraw($grid) {
    foreach ($grid as $row) {
        foreach ($row as $cell) {
            if ($cell === '') {
                return false; // La grille n'est pas pleine
            }
        }
    }
    return true; // La grille est pleine
}

// Traitement du clic du joueur
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['row']) && isset($_POST['col'])) {
    $row = $_POST['row'];
    $col = $_POST['col'];
    if ($_SESSION['grid'][$row][$col] === '') {
        $_SESSION['grid'][$row][$col] = $_SESSION['currentPlayer'];
        // Vérifier s'il y a un gagnant ou si la grille est pleine
        $winner = checkWinner($_SESSION['grid']);
        if ($winner) {
            echo "<p>$winner a gagné !</p>";
            unset($_SESSION['grid']);
        } elseif (checkDraw($_SESSION['grid'])) {
            echo "<p>Match nul !</p>";
            unset($_SESSION['grid']);
        } else {
            $_SESSION['currentPlayer'] = ($_SESSION['currentPlayer'] === 'X') ? 'O' : 'X';
        }
    }
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
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <table>
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++) : ?>
                    <td>
                        <form method="post">
                            <input type="hidden" name="row" value="<?= $i ?>">
                            <input type="hidden" name="col" value="<?= $j ?>">
                            <button type="submit"><?= isset($_SESSION['grid'][$i][$j]) ? ($_SESSION['grid'][$i][$j] !== '' ? $_SESSION['grid'][$i][$j] : '-') : '-' ?></button>
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <form method="post">
        <button type="submit">Réinitialiser la partie</button>
    </form>
</body>
</html>
