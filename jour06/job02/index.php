<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<b><u>$i</u></b><br />";
    } else {
        echo "$i<br />";
    }
}
$exclusions = [26, 37, 88, 1111, 3233];
for ($i = 0; $i <= 1337; $i++) {
    if (!in_array($i, $exclusions)) {
        echo "$i<br />";
    }
}
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br />";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    } else {
        echo "$i<br />";
    }
}
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    } elseif ($i % 3 === 0) {
        echo "Fizz<br />";
    } elseif ($i % 5 === 0) {
        echo "Buzz<br />";
    } else {
        echo "$i<br />";
    }
}
function is_prime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (is_prime($i)) {
        echo "$i<br />";
    }
}
// Dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Affichage du rectangle
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        if (($i == 1 || $i == $hauteur) && ($j == 1 || $j == $largeur)) {
            echo "* ";
        } elseif ($j == 1 || $j == $largeur) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br />";
}
$hauteur= 5;
 
for ($i = 0; $i < $hauteur; $i++)
{
for ($k = 0; $k < $hauteur; $k++)
{echo " ";}
for($z=0;$z<=$i;$z++)
{echo "*";
}
echo "<br />";
}
?>