<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
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
        $nombre_arguments = count($_POST);

        echo "Le nombre d'arguments POST envoyé est : " . $nombre_arguments;
    }
    ?>
</body>
</html>
<?php
$nombre_arguments = count($_GET);

echo "Nombre d'arguments GET : " . $nombre_arguments;
echo '<style>';
echo 'table { width: 50%; border-collapse: collapse; margin: 20px 0; }';
echo 'table, th, td { border: 1px solid black; }';
echo 'th, td { padding: 10px; text-align: left; }';
echo 'th { background-color: #f2f2f2; }';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Tableau des Arguments GET</h1>';

echo '<table>';
echo '<tr>';
echo '<th>Argument</th>';
echo '<th>Valeur</th>';
echo '</tr>';

{
    echo '<tr>';
    echo '</tr>';
}

echo '</table>';
echo '</body>';
echo '</html>';
?>
