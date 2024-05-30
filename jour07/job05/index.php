<?php
// Définition de la fonction occurrences
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    // Parcourir la chaîne de caractères
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    
    return $count;
}

// Exemples d'appels de la fonction
echo occurrences("Bonjour", "o"); // Affiche 2
echo "\n";
echo occurrences("Hello LaPlateforme!", "e"); // Affiche 3
echo "\n";
echo occurrences("PHP is fun!", "p"); // Affiche 0 (caractère sensible à la casse)
echo "\n";
echo occurrences("PHP is fun!", "P"); // Affiche 1
?>
