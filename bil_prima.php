<?php
    // for( $i=1; $i<=10; $i++ ){
    //     $a = 0;
    //     for( $j=1; $j<=$i; $j++ ){
    //         if( $i % $j == 0 ){
    //         $a++;            
    //         }
    //     }
    //     if( $a == 2 ){
    //         echo "Bilangan Prima " . $i . "<br>";
    //     }
    // }
?>

<h3>Menampilakan bilangan prima dari 1 - 10</h3>
<?php 

        for ( $i=1; $i <= 10 ; $i++ ) { 
            $x=0;
            for ( $j=1; $j <= 10 ; $j++ ) { 
                if ( $i % $j == 1 ) {
                    $x++;
                }
            }
            // echo $x . "<br>";

            if ( $x == 1 ) {
                echo $j ." ". $i . "<br>" ;
            }

        }

?>

algoritmanya : 