<?php
function hello() {
    return "Hello LaPlateforme!";
}

// Appel de la fonction et affichage du résultat
$output = hello();
$fp = fopen('php://output', 'w');
fwrite($fp, $output);
fclose($fp);
?>
