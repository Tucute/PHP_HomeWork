<?php
    include "db.php";
    global $conn;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sửa</title>
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
    <?php
        $id=$_GET['id'];
        $ql=mysqli_query($conn, "SELECT*from products where id=$id");
        $row=mysqli_fetch_assoc($ql);
    ?>
    <?php
        if (isset($_POST['btnOk'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $describe = $_POST['describe'];
            $file = $_POST['file'];
            $sql="UPDATE products SET names='$name',price='$price',describes='$describe',file='$file' WHERE id = $id ";

            if(mysqli_query($conn,$sql)) {
               echo "Kết nối thành công !";
               header("Location: index.php"); 
            }
            else {
                echo"Kết nối lỗi". mysqli_error($conn);
            }
        }
    
    ?>
    
    <div class="container">
        <h3>Cập nhật sản phẩm sản phẩm</h3>
        <br>
        <form method="post">
            <label>Nhập tên sản phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $row['names'] ?>">
            <br>
            <label>Giá sản phẩm: </label>
            <input class="form-control form-control-sm" type="number" name="price" value="<?php echo $row['price'] ?>">
            <br>
            <label>Mô tả: </label>
            <input class="form-control form-control-sm" type="text" name="describe" value="<?php echo $row['describes'] ?>">
            <br>
            <label>Link hình ảnh: </label>
            <input class="form-control form-control-sm" type="link" name="file" value="<?php echo $row['file'] ?>">
            <br>
            <button type="submit" name="btnOk" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>