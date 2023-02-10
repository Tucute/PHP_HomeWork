<?php
    $a=20;
    $b=30;
    $c=$a;
    $d=$b;
    while ($a != $b) {
        if($a>$b) {
            $a=$a-$b;
        }
        elseif ($a<$b) {
            $b=$b-$a;
        }
    }
    echo"USCLN $a <br>";
    echo"BSCNN là: ".(($c.$d)/$a);
?>