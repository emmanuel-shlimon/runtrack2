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

// Requête SQL pour récupérer le nom des salles et le nom de leur étage
$sql = "
    SELECT salles.nom AS salle_nom, etage.nom AS etage_nom
    FROM salles
    JOIN etage ON salles.id_etage = etage.id
";
$result = $conn->query($sql);

// Affichage du tableau HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nom de la Salle</th><th>Nom de l'Étage</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["salle_nom"] . "</td>";
        echo "<td>" . $row["etage_nom"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion
$conn->close();
?>
