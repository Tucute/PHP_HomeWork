<html>
    <body>

    <form action="" method='post'>
        <label for="">Nhập số bất kì: </label>
        <input type="number" name="temp">
        <input type="submit" value="submit">
    </form>
        <?php
        if(isset($_POST['temp'])) {
            $n= $_POST['temp'] ;
            $count=0;
        while ($n>0){
            $count += $n%10; 
            $n = $n/10;
        }
        echo "Tổng là: $count";
        }    
        ?>
    </body>
</html>