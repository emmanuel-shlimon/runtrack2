<?php
// Définition de la fonction leetSpeak
function leetSpeak($str) {
    // Tableau de correspondance pour leet speak
    $leetMap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7',
    ];

    // Utilisation de strtr pour effectuer les remplacements
    return strtr($str, $leetMap);
}

// Exemples d'appels de la fonction
echo leetSpeak("Hello LaPlateforme!"); // Affiche H3110 141p1473form3!
echo "\n";
echo leetSpeak("Leet Speak is fun!"); // Affiche 1337 5p34k i5 fun!
echo "\n";
echo leetSpeak("Good Game!"); // Affiche 600d 6am3!
?>
