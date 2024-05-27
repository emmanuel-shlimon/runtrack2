<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h1>Formulaire de Connexion</h1>

    <?php
    echo '<form action="" method="post">';
    echo '<label for="username">Nom d\'utilisateur :</label>';
    echo '<input type="text" id="username" name="username"><br><br>';
    echo '<label for="password">Mot de passe :</label>';
    echo '<input type="password" id="password" name="password"><br><br>';
    echo '<input type="submit" value="Se connecter">';
    echo '</form>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        if ($username === 'John' && $password === 'Rambo') {
            echo '<p>C’est pas ma guerre</p>';
        } else {
            echo '<p>Votre pire cauchemar</p>';
        }
    }
    ?>
</body>
</html>
