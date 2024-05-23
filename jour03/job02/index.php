<?php
echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "<head>\n";
echo "    <title>Affichage d'un caractère sur deux</title>\n";
echo "</head>\n";
echo "<body>\n";

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$result = "";

for ($i = 0; $i < strlen($str); $i += 2) {
    $result .= $str[$i];
}

echo $result;

echo "</body>\n";
echo "</html>";
?>
