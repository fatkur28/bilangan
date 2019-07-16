<h3>Bilangan yang terdiri dari angka 0 dan 1 di awal, kemudian bilangan selanjutnya dari penjumlahan bilangan sebelumnya</h3>
<?php 

$x = 0;
$y = 1;

echo $x . " " . $y . " ";

for ($i=0; $i < 5 ; $i++) { 
    $z = $x + $y;
    echo $z . " ";

    $x = $y;
    $y = $z;
}

?>
