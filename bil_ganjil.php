<h2>Bilangan ganjil dengan Pengkondisian For</h2>
<?php 

    for ( $i=0; $i < 10 ; $i++ ) { 
        if ( $i % 2 == 1 ) {
            echo $i . "<br>";
        }
    }

?>

<h2>Bilangan ganjil dengan Pengkondisian While</h2>

<?php 

$x = 1; 

while($x <= 10) {
    if ( $x % 2 == 1 ) {
        echo $x . "<br>";
    }
    $x++;
}


?>

<h2>Bilangan ganjil dengan Pengkondisian Do While</h2>

<?php 

$a = 1;
do {
    if ( $a % 2 == 1 ) {
        echo $a . "<br>";
    }
    $a++;
} while ($a <= 10);

?>

<h2>Bilangan ganjil dengan Pengkondisian Foreach</h2>

<?php 

$arr = [1,2,3,4,5,6,7,8];

foreach ($arr as $angka) {
    if ($angka % 2 ==  1) {
        echo $angka . "<br>";
    }
}

?>

<?php  for($i=1; $i <= 5; $i++ ) { if( $i % 2 == 1 ) { echo $i . "<br>"; } } ?>