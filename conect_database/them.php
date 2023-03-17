
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
        <form method="post" enctype="multipart/form-data">
            <label>Nhập mã Sản Phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="maSP">            
            <br>
            <label>Nhập tên sản phẩm: </label>
            <input class="form-control form-control-sm" type="text" name="tenSP">            
            <br>
            <label>Đơn vị tính: </label>
            <input class="form-control form-control-sm" type="text" name="donvi">
            <br>
            <label>Giá tiền: </label>
            <input class="form-control form-control-sm" type="number" name="gia">
            <br>
            <label>Số lượng: </label>
            <input class="form-control form-control-sm" type="number" name="soluong">
            <br>
            <label>Chọn hình ảnh: </label>
            <input class="form-control form-control-sm" type="file" name="file_anh">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
    <?php
    if (isset($_POST['btn'])) {
        $connect = mysqli_connect("localhost","root","","tu_database") or die("connect fail !");

        $maSP = $_POST['maSP'];
        $tenSP = $_POST['tenSP'];
        $donvi = $_POST['donvi'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];

        if (isset($_FILES['file_anh'])) {
            $nameFile = $_FILES['file_anh'];
            move_uploaded_file($nameFile['tmp_name'], $nameFile['name']);
            $hinhanh =  $nameFile['name'];
        }

        $check=mysqli_query($connect,"SELECT*FROM sanpham where maSP = '$maSP' ");
        $dem = mysqli_num_rows($check);
        if($dem>0){
            echo "Mã sản phẩm đã tồn tại! Vui lòng nhập lại mã sản phẩm";
        }
        else {

            $sql = "INSERT INTO sanpham (maSP, tenSP, Donvi, gia, SoLuong, Anh) VALUES ('$maSP','$tenSP','$donvi',$gia,$soluong,'$hinhanh')";
            if (mysqli_query($connect, $sql)) {
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
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