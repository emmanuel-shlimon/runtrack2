<?php
// Vérifier si le prénom est déjà stocké dans un cookie
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    $connected = true;
} else {
    $connected = false;
}

// Traitement de la déconnexion
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le mettant à une date passée
    setcookie("prenom", "", time() - 3600);
    // Rediriger pour éviter la soumission du formulaire à nouveau lors du rechargement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Traitement de la soumission du formulaire de connexion
if (isset($_POST['connexion']) && isset($_POST['prenom'])) {
    // Stocker le prénom dans un cookie valide pour 30 jours
    setcookie("prenom", $_POST['prenom'], time() + 3600 * 24 * 30);
    // Rediriger pour éviter la soumission du formulaire à nouveau lors du rechargement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
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
    <?php if ($connected): ?>
        <!-- Afficher un message de bienvenue et le bouton de déconnexion -->
        <p>Bonjour <?php echo htmlspecialchars($prenom); ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <!-- Afficher le formulaire de connexion -->
        <form method="post">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
