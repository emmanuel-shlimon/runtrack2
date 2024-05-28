<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <form onsubmit="return drawHouse()">
        <label for="largeur">Largeur:</label>
        <input type="text" id="largeur" name="largeur" required>
        <label for="hauteur">Hauteur:</label>
        <input type="text" id="hauteur" name="hauteur" required>
        <button type="submit">Soumettre</button>
    </form>

    <pre id="maison"></pre>

    <script>
        function drawHouse() {
            const largeur = parseInt(document.getElementById('largeur').value, 10);
            const hauteur = parseInt(document.getElementById('hauteur').value, 10);
            const maisonElement = document.getElementById('maison');

            if (isNaN(largeur) || isNaN(hauteur) || largeur <= 0 || hauteur <= 0) {
                maisonElement.textContent = 'Veuillez entrer des valeurs valides pour la largeur et la hauteur.';
                return false;
            }

            let maison = '';

            for (let i = 0; i < hauteur; i++) {
                let espaces = ' '.repeat(hauteur - i - 1);
                let etoiles = '*'.repeat(2 * i + 1);
                maison += espaces + etoiles + espaces + '\n';
            }

            let mur = '*'.repeat(largeur) + '\n';
            maison += mur.repeat(hauteur);

            maisonElement.textContent = maison;
            return false;
        }

        window.onload = drawHouse; // Vérifie si une largeur et une hauteur sont présentes dans l'URL lors du chargement de la page
    </script>
</body>
</html>