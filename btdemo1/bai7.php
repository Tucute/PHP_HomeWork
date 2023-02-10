<!-- Bài 1: Cho a, viết chương trình in bảng cửu chương của a. 
    Bài 2: Cho 2 số a,b. Tìm USCLN, BSCNN của 2 số a,b -->

<html>
    <body>
        <?php
            $n=4;
            for($i=1;$i<=$n;$i++) {
                echo "Bảng nhân $i <br>";
                $count=0;
                for($j=1; $j<=10; $j++) {
                    $count = $i*$j;
                    echo"$i*$j=$count <br>"; 
                }
                echo"<br>";
            }
        ?>
    </body>
</html>