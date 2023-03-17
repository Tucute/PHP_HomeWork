<?php 
    require "db.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Sửa danh sách thành viên</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<?php
        $id=$_GET['id'];
        $ql=mysqli_query($connect, "SELECT*from thanhvien where id=$id");
        $row=mysqli_fetch_assoc($ql);
    ?>
    
    <div class="container" enctype="multipart/form-data">
        <h3>Cập nhật sản phẩm sản phẩm</h3>
        <br>
        <form method="post">
            <label>Sửa id:  </label>
            <input class="form-control form-control-sm" type="text" name="idtv" value="<?php echo $row['id'] ?>">
            <br>
            <label>Sửa tên tài khoản: </label>
            <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $row['taiKhoan'] ?>">
            <br>
            <label>Sửa mật khẩu: </label>
            <input class="form-control form-control-sm" type="password" name="pass" value="<?php echo $row['matKhau'] ?>">
            <br>
            <label>Thay đổi phần ghi chú: </label>
            <input class="form-control form-control-sm" type="text" name="ghiChu" value="<?php echo $row['ghiChu'] ?>">
            <br>
            <label>Link hình ảnh: </label>
            <input class="form-control form-control-sm" type="file" name="file">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Cập nhật</button>
        </form>

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
                $idtv=$_POST['idtv'];
                $check = mysqli_query($connect, "SELECT * FROM thanhvien WHERE id = '$idtv' ");
                $dem = mysqli_num_rows($check);
                if ($dem > 0) {
                    echo "Mã thành viên đã tồn tại! Vui lòng nhập lại mã thành viên";
                }
                else {
                    $sql = "UPDATE thanhvien SET id = '$idtv', taiKhoan = '$name' , matKhau = '$pass' , ghiChu= '$ghiChu' ,avatar = '$file' WHERE id = '$id' ";
                    if (mysqli_query($connect, $sql)) {
                        echo "New record created successfully";
                        header("Location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                    }
                }
                

            }
        ?>
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