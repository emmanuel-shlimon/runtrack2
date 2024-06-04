<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // ou l'adresse de votre serveur MySQL
$username = "root"; // votre nom d'utilisateur MySQL
$password = ""; // votre mot de passe MySQL
$dbname = "jour09";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Requête SQL pour récupérer l'ensemble des informations de la table etudiants
$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Créer le tableau HTML
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    
    // Afficher les noms des champs (entêtes du tableau)
    while ($field_info = $result->fetch_field()) {
        echo "<th>" . $field_info->name . "</th>";
    }
    
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // Afficher les données de la table
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . $cell . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
