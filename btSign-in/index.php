<?php
include "class.database.php";
global $conn;
?>
<!doctype html>
<html lang="en">

<head>
  <title>Danh sách thành viên</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .container {
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        a{
            text-decoration: none; 
            color: white;
        }
        thead tr {
            background: #FF7F50;
        }
    </style>
</head>

<body>

    <div class = "container">
        <h1>Danh sách tài khoản</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Avatar</td>
                    <td>ID</td>
                    <td>Tên tài khoản</td>
                    <td>Mật khẩu</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users");
                while ($row = mysqli_fetch_assoc($sql)) {
                ?>
                    <tr>
                        <td>
                            <img src="<?php echo $row['avatar'] ?>" width="60px">
                        </td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td>
                            <button class="btn btn-warning">
                                <a href="http://localhost/Demo1/btSign-in/sua.php?id=<?php echo $row['id'] ?>">Sửa</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="http://localhost/Demo1/btSign-in/xoa.php?id=<?php echo $row['id'] ?>">Xóa</a>
                            </button>
                        </td>
                        <?php
                }
                        ?>
                    </tr>
            </tbody>
        </table>
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