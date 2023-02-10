<html>
    <body>
        <?php
        $n=1078;
        $count=0;
        $i=1;
        while ($n>0) {
            $count += $n%10;
            $n = $n/10;
        }
        echo "$count";
        ?>
    </body>
</html>