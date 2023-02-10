<html>
    <body>
        <?php
        $canh1 = 3;
        $canh2 = 3;
        $canhhuyen = 3;
        if ($canh1 + $canh2>$canhhuyen && $canh1 + $canhhuyen>$canh2 && $canhhuyen + $canh2>$canh1) {
            if ($canh1 == $canh2 && $canh1 != $canhhuyen) {
                echo "Đây là tam giác cân";
            }
            if ($canh1 == $canh2 && $canh1 == $canhhuyen) {
                echo "Đây là tam giác đều";
            }
        }
        else {
            echo "Đây là không phải là tam giác";
        }
        ?>
    </body>
</html>