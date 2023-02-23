<?php
session_start();
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
    <?php
    $fruit2 = $_SESSION['array'];
    $id = $_GET['id'];
    if (isset($_POST['btn'])) {
        // $fruits[]=["ten"=>$_POST['name'],"gia"=>$_POST['price'],"mota"=>$_POST['describe'],"file"=>$_POST['file'] ];
        $n = count($fruit2);
        $fruit2[$id]["ten"] = $_POST['name'];
        $fruit2[$id]["gia"] = $_POST['price'];
        $fruit2[$id]["mota"] = $_POST['describe'];
        $fruit2[$id]["file"] = $_POST['file'];

        $_SESSION['fruit'] = $fruit2;
        header("Location: index.php");
    }
    ?>
    <div class="container">
        <h3>Cập nhật sản phẩm sản phẩm</h3>
        <br>
        <form method="post">
            <label>Nhập tên sản phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="name"
                value="<?php echo $fruit2[$id]["ten"] ?>">
            <br>
            <label>Giá sản phẩm: </label>
            <input class="form-control form-control-sm" type="number" name="price"
                value="<?php echo $fruit2[$id]["gia"] ?>">
            <br>
            <label>Mô tả: </label>
            <input class="form-control form-control-sm" type="text" name="describe"
                value="<?php echo $fruit2[$id]["mota"] ?>">
            <br>
            <label>Link hình ảnh: </label>
            <input class="form-control form-control-sm" type="link" name="file"
                value="<?php echo $fruit2[$id]["file"] ?>">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Update</button>
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