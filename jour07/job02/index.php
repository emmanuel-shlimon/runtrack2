<?php
function bonjour($jour) {
    // Vérifie la valeur du paramètre $jour et affiche le message correspondant
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appels de la fonction pour démontrer son fonctionnement
bonjour(true);  // Affiche "Bonjour"
echo "\n";  // Saut de ligne pour séparer les sorties
bonjour(false); // Affiche "Bonsoir"
?>
