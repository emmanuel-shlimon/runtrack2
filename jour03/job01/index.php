<?php
// Tableau des nombres
$numbers = [76, 421, 123, 96, 390, 600, 201];

// Parcourir le tableau et vérifier la parité de chaque nombre
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " est paire<br />\n";
    } else {
        echo $number . " est impaire<br />\n";
    }
}
?>
