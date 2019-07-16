<?php 

    $x = 7890;
    $jam = round($x/3600);
    $menit = round($jam/60);
    $detik = round($menit/60);
    
    echo "detik = ".$x . "<br> ----------- <br>";
    echo $jam . " jam " . $menit ." menit " . $detik ." detik ";  
    echo "<br> ----------- <br>";

?>