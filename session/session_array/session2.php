<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
    <style>
        .table{
            text-align: center;
            width: 900px;
        }
    </style>
<body>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (isset($_SESSION['array'])){
                    $fruits=$_SESSION["array"];
                    $j=1;
                    for($i=0;$i<count($fruits);$i++) {
                        echo"<tr>";
                        echo"<td> $j </td>";
                        echo"<td>". $fruits[$i]["ten"]."</td>";
                        echo"<td>". $fruits[$i]["gia"]."</td>";
                        echo"<td>". $fruits[$i]["mota"]."</td>";
                        echo"<td> <img src='". $fruits[$i]["file"]."'></td>";
                        $j++;
                    }
                }
                ?>   
            </tbody>
            </table>
            <div>
                <a href="http://localhost/Demo1/session/session_array/session1.php">Thêm</a>
            </div>
        
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