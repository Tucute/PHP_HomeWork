
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $arr=array();
    $arr[0]['name']="Sandal nữ cao gót phong cách Hàn Quốc - Kem - SD02K";
    $arr[0]['oldprice']="400,000đ";
    $arr[0]['newprice']="400,000đ";
    $arr[0]['status']="true";
    $arr[0]['img']="https://lzd-img-global.slatic.net/g/p/414dfbb4c63e74e3162882aebdcdeb6a.jpg_720x720q80.jpg_.webp";
    $arr[1]['name']="Sandal nữ cao gót phong cách Hàn Quốc - Kem - SD02K";
    $arr[1]['oldprice']="700,000đ";
    $arr[1]['newprice']="600,000đ";
    $arr[1]['status']="true";
    $arr[1]['img']="https://hotgirlshop.com/uploads/picture/14092021/News/2091412201-giay-nu-miumiu.jpg";
    $arr[2]['name']="Sandal nữ cao gót phong cách Hàn Quốc - Kem - SD02K";
    $arr[2]['oldprice']="200,000đ";
    $arr[2]['newprice']="218,000đ";
    $arr[2]['status']="true";
    $arr[2]['img']="https://vn-live-01.slatic.net/p/f6879f5bd79cb6b05da5b167cfd8ac92.jpg";

    $array=array();
    $array[0]['name']="Túi xách nữ thời trang POTEKO";
    $array[0]['oldprice']="2,000,000đ";
    $array[0]['newprice']="1,500,000đ";
    $array[0]['status']="true";
    $array[0]['img']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp8R0Qwrlqqt6VCVfgj_QWAJx3iK0_6uHuMb-efB6YW_wm6WtKmC4cWrwfR-QNIPau2O4&usqp=CAU";
    $array[1]['name']="Túi xách nữ da cao cấp SP-2A-Đen";
    $array[1]['oldprice']="1,050,000đ";
    $array[1]['newprice']="500,000đ";
    $array[1]['status']="true";
    $array[1]['img']="https://cf.shopee.vn/file/e34eadd3aa837916218f57f497128aac";
    $array[2]['name']="Túi xách nữ da cao cấp T6887-2A1-Đen";
    $array[2]['oldprice']="800,000đ";
    $array[2]['newprice']="450,000đ";
    $array[2]['status']="true";
    $array[2]['img']="https://cf.shopee.vn/file/0b861ba4c9750f96dd96d186a6484e7b";
?>
    <form action="" method="post">
        <h6>Dữ liệu giày</h6>
        <?php print_r($arr) ?>
        <br>
        <br>
        <h6>Dữ liệu túi</h6>
        <?php print_r($array) ?>
        <br>
        <br>
        <input type="submit" name="btn" value="Save data">
    </form>
    <?php 
        if(isset($_POST['btn'])) {
            $_SESSION['giay'] = $arr;
            $_SESSION['tui'] = $array;
            header("Location: index.php");
        }
    ?>
</body>
</html>