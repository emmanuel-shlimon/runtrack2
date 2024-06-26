<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison en PHP</title>
    <style>
        .house {
            font-family: monospace;
            white-space: pre;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="largeur">Largeur :</label>
        <input type="text" id="largeur" name="largeur" required>
        <label for="hauteur">Hauteur :</label>
        <input type="text" id="hauteur" name="hauteur" required>
        <button type="submit">Dessiner la maison</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = intval($_POST["largeur"]);
        $hauteur = intval($_POST["hauteur"]);

        if ($largeur < 2 || $hauteur < 1) {
            echo "<p>La largeur doit être au moins 2 et la hauteur au moins 1.</p>";
            exit();
        }

        echo "<div class='house'>";

        // Dessin du toit
        $triangleSize = ceil($largeur / 2);
        for ($i = 0; $i < $triangleSize; $i++) {
            for ($j = $i; $j < $triangleSize; $j++) {
                echo "&nbsp;";
            }
            echo "/";
            for ($j = 0; $j < 2 * $i; $j++) {
                echo "&nbsp;";
            }
            echo "\\<br/>";
        }

        // Dessin de la barre de séparation
        echo "|";
        for ($i = 0; $i < $largeur; $i++) {
            echo "-";
        }
        echo "|<br/>";

        // Dessin des murs
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|";
            for ($j = 0; $j < $largeur; $j++) {
                echo "&nbsp;";
            }
            echo "|<br/>";
        }

        // Dessin de la base
        echo "|";
        for ($i = 0; $i < $largeur; $i++) {
            echo "_";
        }
        echo "|<br/>";

        echo "</div>";
    }
    ?>
</body>
</html>
