<html>
    <body>
        <form action="" method="post">
            <Label>Nhập số n: 
                <input type="number" name="number">
            </Label>
        </form>

        <?php
        if (isset($_POST['number'])) {
            $n=$_POST['number'];
            $count=0;
            for($i=1; $i<=$n; $i++) {
                if ($n % $i==0) {
                    $count += 1;
                }
            } 
            if($count==2 || $n==1 )  {
                echo"$n là số nguyên tố.";
            }  
            else {
                echo "$n không phải là số nguyên tố.";
            }
        }
        ?>
    </body>
</html>