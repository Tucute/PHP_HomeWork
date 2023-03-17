<?php
    require "db.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Thêm thành viên</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
<div class="container">
        <h3>Thêm thành viên</h3>
        <br>
        <form method="post" enctype="multipart/form-data">
            <label>Nhập tên tài khoản: </label>
            <input class="form-control form-control-sm" type="text" name="name">            
            <br>
            <label>Mật khẩu: </label>
            <input class="form-control form-control-sm" type="password" name="pass">
            <br>
            <label>Ghi chú: </label>
            <input class="form-control form-control-sm" type="text" name="ghiChu">
            <br>
            <label>Chọn avatar: </label>
            <input class="form-control form-control-sm" type="file" name="file">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Thêm</button>
        </form>
    </div>
    
    <?php
    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $ghiChu = $_POST['ghiChu'];
        if (isset($_FILES['file'])) {
            $nameFile = $_FILES['file'];
            move_uploaded_file($nameFile['tmp_name'], $nameFile['name']);
            $file =  $nameFile['name'];
        }

            $sql = "INSERT INTO thanhvien (taiKhoan, matKhau, ghiChu, avatar) VALUES ('$name','$pass','$ghiChu','$file')";
            if (mysqli_query($connect, $sql)) {
                echo "New record created successfully";
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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