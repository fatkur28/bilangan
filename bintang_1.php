<?php
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
    die;
    for ($k = 10; $k > 1; $k--) {
        for ($l = 1; $l < $k; $l++) {
            echo "*";
        }
        echo "<br>";
    }
}

// for ($i = 10; $i > 1; $i--) {
//     for ($j = 1; $j < $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }
