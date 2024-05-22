<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$booleanVar = true;
$intVar = 42;
$stringVar = "Salut, ça va PHP?!";
$floatVar = 3.14;

$variables = [
    ["type" => "boolean", "nom" => '$booleanVar', "valeur" => $booleanVar ? 'true' : 'false'],
    ["type" => "entier", "nom" => '$intVar', "valeur" => $intVar],
    ["type" => "chaîne de caractères", "nom" => '$stringVar', "valeur" => $stringVar],
    ["type" => "nombre à virgule flottante", "nom" => '$floatVar', "valeur" => $floatVar],
];
?>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $variable): ?>
            <tr>
                <td><?php echo $variable['type']; ?></td>
                <td><?php echo $variable['nom']; ?></td>
                <td><?php echo $variable['valeur']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>