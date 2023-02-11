<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài 4 PHP</title>
</head>
<body>
    <form action="" method="post">
        <section>
            <label for="">Nhập số thứ nhất: </label>
            <input type="number" name="number1" placehoder="Nhập a">
        </section>
        <section>
            <label for="">Nhập số thứ hai: </label>
            <input type="number" name="number2" placehoder="Nhập b">
        </section>
        <input type="submit" name="btn" value="submit">
    </form>

    <?php
    if (isset($_POST['number1']) && isset($_POST['number2'])  ) {
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $str='';
        for ($i=$number1;$i<=$number2;$i++) {
            if ($i%3==0) {
                $str = $str.(string)$i."," ;
            }
        }  
        if ($str==''){
            echo"Không có số nào chia hết cho 3";
        }
        else {
            echo"Các số chia hết cho 3 trong khoảng $number1 đến $number2 là $str";
        }
    }    
        ?>
</body>
</html>