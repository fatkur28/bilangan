<?php
$ntf = 9;
$ntc = 5;
$sbf = 32;
// $sbc = 0;
$x = 87;

$a = $ntf * $x;
$b = $a / $ntc;
$c = $b + $sbf;

echo "<h2>Konversi suhu</h2>";
echo $x . "&deg;celcius = " . $c . " &deg;fahreinheit <br><br>";

$d = $c - $sbf;
$e = $d * $ntc;
$f = $e / $ntf;

echo $c . "&deg;fahrenheit = " . $f . " &deg;celcius";
