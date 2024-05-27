<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST avec Tableau des Résultats</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Formulaire de test POST</h1>
    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label for="email">Email :</label>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Tableau des Arguments POST</h2>';
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        foreach ($_POST as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>';
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }
    ?>
</body>
</html>
