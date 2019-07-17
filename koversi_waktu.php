<?php

$x = 7890;
$jam = round($x / 3600);
$menit = round($jam / 60);
$detik = round($menit / 60);

echo "detik = " . $x . "<br> ----------- <br>";
echo $jam . " jam " . $menit . " menit " . $detik . " detik ";
echo "<br> ----------- <br>";

?>

<?php
// $waktu = 7890 - 30;

// echo $waktu;

// die;

// $ detik = fmod($waktu, 60);
// echo $detik;
// die;
// $tempmenit = ($waktu - $detik) / 60;
// $menit = fmod($tempmenit, 60);
// $jam = ($tempmenit - $menit) / 60;
// $lama = $jam . " Jam " . $menit . " Menit " . number_format($detik, 2) . " detik";

// echo $lama;

?>