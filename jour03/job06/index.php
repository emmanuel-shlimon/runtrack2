<?php
// Déclaration de la chaîne de caractères
$str = "Les choses que l'on possède finissent par nous posséder.";

// Longueur de la chaîne
$length = mb_strlen($str);

// Parcours de la chaîne de caractères à l'envers et affichage
for ($i = $length - 1; $i >= 0; $i--) {
    echo mb_substr($str, $i, 1);
}
?>
