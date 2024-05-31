<?php
// Démarrer la session
session_start();

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la liste en détruisant les prénoms dans la session
    unset($_SESSION['prenoms']);
    // Rediriger pour éviter la soumission du formulaire à nouveau lors du rechargement
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Vérifier si le formulaire a été soumis et si le champ prénom n'est pas vide
if (isset($_POST['submit']) && !empty($_POST['prenom'])) {
    // Ajouter le prénom à la variable de session
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Afficher l'ensemble des prénoms
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "Liste des prénoms : <br>";
    echo "<ul>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo "<li>" . htmlspecialchars($prenom) . "</li>";
    }
    echo "</ul>";
}
?>

<!-- Formulaire pour ajouter un prénom -->
<form method="post">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required>
    <button type="submit" name="submit">Ajouter</button>
</form>

<!-- Formulaire avec le bouton reset -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
