<html>
    <body>
    <form action="" method='post'>
        <label for="">Nhập số bất kì: </label>
        <input type="number" name="temp">
    </form>
        <?php
        $n= $_POST['temp'] ;
        // $n=1078;
        $count=0;
        while ($n>0) {
            $count += $n%10;
            $n = $n/10;
        }
        echo "Tổng là: $count";
        ?>
    </body>
</html>