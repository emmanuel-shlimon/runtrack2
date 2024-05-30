<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post" action="">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        
        <button type="submit">Soumettre</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        function gras($str) {
            return preg_replace('/\b([A-Z][a-z]*)\b/', '<b>$1</b>', $str);
        }

        function cesar($str, $decalage = 2) {
            $result = '';
            $decalage = $decalage % 26;
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    if (ctype_upper($char)) {
                        $result .= chr((($ascii - 65 + $decalage) % 26) + 65);
                    } else {
                        $result .= chr((($ascii - 97 + $decalage) % 26) + 97);
                    }
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }

        $output = '';
        switch ($fonction) {
            case 'gras':
                $output = gras($str);
                break;
            case 'cesar':
                $output = cesar($str);
                break;
            case 'plateforme':
                $output = plateforme($str);
                break;
            default:
                $output = "Option invalide";
        }
        
        echo "<p>Résultat : $output</p>";
    }
    ?>
</body>
</html>
