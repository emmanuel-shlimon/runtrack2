<?php

// Déclaration de la chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$nb_caracteres = 0;

// Parcours de la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    // Incrémentation du compteur à chaque caractère rencontré
    $nb_caracteres++;
}

// Affichage du nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $nb_caracteres;

?>
