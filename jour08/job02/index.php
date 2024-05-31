<?php
// Démarrer la session pour gérer le bouton reset
session_start();

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur en supprimant le cookie
    setcookie("nbvisites", "", time() - 3600); // Expire le cookie
    // Rediriger pour éviter la soumission du formulaire à nouveau lors du rechargement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Initialiser ou incrémenter la variable de cookie nbvisites
if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

// Mettre à jour le cookie avec la nouvelle valeur
setcookie("nbvisites", $nbvisites, time() + 3600 * 24 * 30); // Cookie valide pour 30 jours

// Afficher le nombre de visites
echo "Nombre de visites : " . $nbvisites;
?>

<!-- Formulaire avec le bouton reset -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
