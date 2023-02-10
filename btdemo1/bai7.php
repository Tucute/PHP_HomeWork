<!-- Bài 7: Cho a, viết chương trình in bảng cửu chương của a.  -->

<html>
    <body>
        <table border='1 solid'>
            <tr>
                <?php
                    $n=4;
                    echo"<td>";
                    for($j=1; $j<=10; $j++) {
                        echo"$n*$j=".($n*$j);
                        echo"<br>"; 
                    }
                    echo "</td>";
                ?>
            </tr>
        </table>
    </body>
</html>