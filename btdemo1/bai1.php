<html>
    <body>
        <?php
        $n=4;
        $temp=1;
        for ($i=1; $i<$n+1; $i++) {
            $temp = $i*$temp;
        }
        echo "$temp";
        ?>
    </body>
</html>