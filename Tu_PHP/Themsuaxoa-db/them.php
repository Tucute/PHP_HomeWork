<?php
include "db.php";
global $conn;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
            width: 500px;
            padding: 20px;
            box-shadow: 20px 20px 20px 20px rgb(0, 0, 0, 0.1);
        }

        label {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Thêm sản phẩm</h3>
        <br>
        <form method="post">
            <label>Nhập tên sản phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="name">
            <br>
            <label>Giá sản phẩm: </label>
            <input class="form-control form-control-sm" type="number" name="price">
            <br>
            <label>Mô tả: </label>
            <input class="form-control form-control-sm" type="text" name="describe">
            <br>
            <label>Link hình ảnh: </label>
            <input class="form-control form-control-sm" type="link" name="file">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Thêm</button>
        </form>
    </div>
    <?php
    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $describe = $_POST['describe'];
        $file = $_POST['file'];

        if ($name == '') {
            echo "<script> alert('Vui lòng nhập tên sản phẩm') </script>";
        }
        if ($price == '') {
            echo "<script> alert('Vui lòng nhập giá của sản phẩm') </script>";
        }
        if ($name != '' && $price != '') {
            $sql = "INSERT INTO product (name, price, describe, file) VALUES ('$name','$price','$describe','$file')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        }
    }
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>