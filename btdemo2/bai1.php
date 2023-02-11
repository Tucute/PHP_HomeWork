<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form {
            display: flex;
            justify-content: center;
        }
        .section{
            border: 1px solid black;
            width :500px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align :center;
        }
    </style>
</head>
<body>
    <form action="" mothod="post">
        <div class="section">
            <h1>Bảng tính của tôi</h1>
            <div class="section-content">
                <label for="">Nhập số thứ nhất</label>
                <input type="number" name="one">
            </div>
            <br>
            <div class="section-content">
                <label for="">Nhập số phép toán</label>
                <input type="text" name="type">
            </div>
            <br>
            <div class="section-content">
                <label for="">Nhập số thứ hai</label>
                <input type="number" name="two">
                <input type="submit" value="submit" name="btn">
            </div>
            <br>
        </div>
    </form>
    <?php
    // if(isset($_POST['one']) || isset($_POST['two']) || isset($_POST['type'])) {}
        // $one=$_POST['one'];
        // $type=$_POST['type'];
        // $one=$_POST['two'];
        if((isset($_POST['one'])) && (isset($_POST['two'])) && (isset($_POST['type']))){
            $one=$_POST['one'];
            $type=$_POST['type'];
            $two=$_POST['two'];
        }
        if(isset($_POST['btn'])) {
            switch ($type) {
                case '+':
                    $temp=$one+$two;
                    break;
                case '-':
                    $temp=$one-$two;
                    break;
                case '*':
                    $temp=$one*$two;
                    break;
                case '/':
                    $temp=$one/$two;
                    break;
            }
            echo "dfdfd";
        }
        
    ?>
</body>
</html>