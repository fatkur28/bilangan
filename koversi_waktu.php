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
$waktu = 800;
$detik = fmod($waktu, 60);
$tempmenit = ($waktu - $detik) / 60;
$menit = fmod($tempmenit, 60);
$jam = ($tempmenit - $menit) / 60;
$lama = $jam . " Jam " . $menit . " Menit " . number_format($detik, 2) . " detik";
echo $lama;

?>

<?php
// $waktunya = 8000;
// $jam = round($waktunya / 3600);
// $jam1 = $jam * 3600;
// $jam2 = $waktunya - $jam1;

// $menit = $menit / 60;
// $menit2 = $menit1 * 60;
// $menit3 = $menit - 60;
// echo $jam . " " . $jam1 . " " . $menit;

?>