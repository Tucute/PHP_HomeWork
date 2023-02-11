<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method='post'>
    <div>
        <label for="">Nhập số thứ nhất: </label>
        <input type="number" name="one">
    </div>
    <div>
        <label for="">Nhập số thứ hai: </label>
        <input type="number" name="two">
        <input type="submit" value="Tính tổng">
    </div>
    </form>
        <?php
        $a= $_POST['one'];
        $b= $_POST['two'];
        echo"Tổng hai số là: ".$a+$b;
        ?>
</body>
</html>