<?php
// Paramètres de connexion à la base de données
$servername = "localhost"; // ou l'adresse de votre serveur MySQL
$username = "root"; // votre nom d'utilisateur MySQL
$password = ""; // votre mot de passe MySQL
$dbname = "jour09";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête SQL pour récupérer l'ensemble des informations des salles triées par capacité décroissante
$sql = "SELECT * FROM salles ORDER BY capacite DESC";
$result = $conn->query($sql);

// Affichage du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>ID Etage</th><th>Capacité</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["id_etage"] . "</td>";
        echo "<td>" . $row["capacite"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion
$conn->close();
?>
