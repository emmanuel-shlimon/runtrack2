<?php

// Texte à analyser
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Tableau pour stocker le nombre d'occurrences de consonnes et de voyelles
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

// Convertir le texte en minuscules pour simplifier l'analyse
$str = strtolower($str);

// Parcours de chaque caractère du texte
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    
    // Vérifier si le caractère est une voyelle (a, e, i, o, u, y)
    if (in_array($char, ['a', 'e', 'i', 'o', 'u', 'y'])) {
        $dic["voyelles"]++;
    }
    // Vérifier si le caractère est une consonne (tous les autres caractères sauf les voyelles et les espaces)
    elseif (preg_match('/[a-z]/', $char)) {
        $dic["consonnes"]++;
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
    </table>";

?>
