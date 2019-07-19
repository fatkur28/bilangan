<?php
$x = 15;
for ($i = 1; $i < $x; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
    if ($i == $x - 1) {
        for ($k = $x; $k > 1; $k--) {
            for ($l = 1; $l < $k; $l++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}
