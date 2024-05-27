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
