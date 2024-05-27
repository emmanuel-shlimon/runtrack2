<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Nombre Pair ou Impair</title>
</head>
<body>
    <form method="get" onsubmit="return checkNumber()">
        <label for="nombre">Entrez un nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Soumettre</button>
    </form>

    <p id="resultat"></p>

    <script>
        function checkNumber() {
            const params = new URLSearchParams(window.location.search);
            const nombre = params.get('nombre');
            const resultat = document.getElementById('resultat');

            if (nombre !== null) {
                const number = parseInt(nombre, 10);
                if (isNaN(number)) {
                    resultat.textContent = 'Veuillez entrer un nombre valide.';
                } else if (number % 2 === 0) {
                    resultat.textContent = 'Nombre pair';
                } else {
                    resultat.textContent = 'Nombre impair';
                }
            }
            return false;
        }

        window.onload = checkNumber;
    </script>
</body>
</html>
