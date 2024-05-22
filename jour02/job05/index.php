<?php
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
?>
