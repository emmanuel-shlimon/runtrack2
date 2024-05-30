<?php
// Définition de la fonction calcule
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            // Vérification pour éviter la division par zéro
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            // Vérification pour éviter la division par zéro
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : division par zéro";
            }
        default:
            return "Erreur : opération invalide";
    }
}

// Exemples d'appels de la fonction
echo calcule(10, '+', 5); // Affiche 15
echo "\n";
echo calcule(10, '-', 5); // Affiche 5
echo "\n";
echo calcule(10, '*', 5); // Affiche 50
echo "\n";
echo calcule(10, '/', 5); // Affiche 2
echo "\n";
echo calcule(10, '%', 3); // Affiche 1
echo "\n";
echo calcule(10, '/', 0); // Affiche "Erreur : division par zéro"
echo "\n";
echo calcule(10, 'x', 5); // Affiche "Erreur : opération invalide"
?>
