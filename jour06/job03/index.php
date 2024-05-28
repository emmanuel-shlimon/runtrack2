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
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$result = "";

for ($i = 0; $i < strlen($str); $i += 2) {
    $result .= $str[$i];
}

echo $result;

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


// Déclaration de la chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$nb_caracteres = 0;

// Parcours de la chaîne de caractères
for ($i = 0; $i < strlen($str); $i++) {
    // Incrémentation du compteur à chaque caractère rencontré
    $nb_caracteres++;
}

// Affichage du nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $nb_caracteres;


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

    // Déclaration de la chaîne de caractères
    $str = "Les choses que l'on possède finissent par nous posséder.";
    
    // Longueur de la chaîne
    $length = mb_strlen($str);
    
    // Parcours de la chaîne de caractères à l'envers et affichage
    for ($i = $length - 1; $i >= 0; $i--) {
        echo mb_substr($str, $i, 1);
    }
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
