<?php
session_start();

// Vérifiez si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur en détruisant la session
    session_destroy();
    // Rediriger pour éviter la soumission du formulaire à nouveau lors du rechargement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Initialiser ou incrémenter la variable de session nbvisites
if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}

// Afficher le nombre de visites
echo "Nombre de visites : " . $_SESSION['nbvisites'];
?>

<!-- Formulaire avec le bouton reset -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
