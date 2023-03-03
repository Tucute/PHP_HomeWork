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
    $product = $_SESSION['array'];
    $id = $_GET['id'];
    if (isset($_POST['btn'])) {
        // $fruits[]=["ten"=>$_POST['name'],"gia"=>$_POST['price'],"mota"=>$_POST['describe'],"file"=>$_POST['file'] ];
        $n = count($product);
        $product[$id]["ten"] = $_POST['name'];
        $product[$id]["gia"] = $_POST['price'];
        $product[$id]["file"] = $_FILES['file_up'];
        echo "d";
        if(isset($_FILES['file_up'])) {
            $tenfile=$_FILES['file_up']['name'];
            $tentam=$_FILES['file_up']['tmp_name'];
            move_uploaded_file($tentam,$tenfile);
            $product[$id]["file"] = $tenfile;
        }

        $_SESSION['array'] = $product;
        // header("Location: index.php");
    }
    ?>
    <div class="container">
        <h3>Cập nhật sản phẩm sản phẩm</h3>
        <br>
        <form method="post" enctype="multipart/form-data">
            <label>Nhập tên sản phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="name"
                value="<?php echo $product[$id]["ten"] ?>">
            <br>
            <label>Giá sản phẩm: </label>
            <input class="form-control form-control-sm" type="number" name="price"
                value="<?php echo $product[$id]["gia"] ?>">
            <br>

            <label>Link hình ảnh: </label>
            <input class="form-control form-control-sm" type="file" name="file_up"
                value="<?php echo $product[$id]["file"] ?>">
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