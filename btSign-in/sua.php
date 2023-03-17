<?php
include "class.database.php";
global $conn;
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
        $ql=mysqli_query($conn, "SELECT*from users where id=$id");
        $row=mysqli_fetch_assoc($ql);
    ?>
    
    <div class="container" enctype="multipart/form-data">
        <h3>Cập nhật danh sách thành viên</h3>
        <br>
        <form method="post">
            <label>Sửa id:  </label>
            <input class="form-control form-control-sm" type="text" name="idUser" value="<?php echo $row['id'] ?>">
            <br>
            <label>Sửa tên tài khoản: </label>
            <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $row['username'] ?>">
            <br>
            <label>Sửa mật khẩu: </label>
            <input class="form-control form-control-sm" type="password" name="pass" value="<?php echo $row['password'] ?>">
            <br>
            <label>Chọn avatar: </label>
            <input class="form-control form-control-sm" type="file" name="file">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Cập nhật</button>
        </form>

        <?php
            if (isset($_POST['btn'])) {
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                if (isset($_FILES['file'])) {
                    $nameFile = $_FILES['file'];
                    move_uploaded_file($nameFile['tmp_name'], 'img/'.$nameFile['name']);
                    $file =  $nameFile['name'];
                }

                $idUser=$_POST['idUser'];
                $check = mysqli_query($conn, "SELECT * FROM users WHERE id = '$idUser' ");
                $dem = mysqli_num_rows($check);
                if ($dem > 0 && $id != $idUser ) {
                    echo "Mã thành viên đã tồn tại! Vui lòng nhập lại mã thành viên";   
                }
                else {
                    $sql = "UPDATE users SET id = '$idUser', username = '$name' , password = '$pass' ,avatar = '$file' WHERE id = '$id' ";
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                        header("Location: index.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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