<!-- 
_
|_
|_
|_ 
-->
<?php

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($i == $j) {
            $a = "|_";
            echo $a;
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>