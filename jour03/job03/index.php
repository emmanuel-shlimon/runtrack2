<?php
// Définition de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcourir la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère courant est une voyelle
    if (in_array($str[$i], $vowels)) {
        // Afficher la voyelle
        echo $str[$i];
    }
}

?>
