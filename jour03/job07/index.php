<?php
// Déclaration de la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Longueur de la chaîne
$length = strlen($str);

// Parcours de la chaîne et remplacement des caractères
$new_str = "";
for ($i = 0; $i < $length; $i++) {
    // Index du caractère suivant
    $next_index = ($i + 1) % $length;
    // Construction de la nouvelle chaîne avec les caractères échangés
    $new_str .= $str[$next_index];
}

// Affichage de la nouvelle chaîne
echo $new_str;
?>
