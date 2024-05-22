<?php
// Dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Affichage du rectangle
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        if (($i == 1 || $i == $hauteur) && ($j == 1 || $j == $largeur)) {
            echo "* ";
        } elseif ($j == 1 || $j == $largeur) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br />";
}
?>