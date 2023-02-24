<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Test</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .table{
            text-align: center;
            width: 900px;
        }
    </style>
</head>

<body>
  
<div class="container">
        <h2>Danh sách người dùng</h2>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($_SESSION['array'])){
                    $User=$_SESSION['array'];
                    $j=1;
                    for($i=0;$i<count($User);$i++) {

                ?>

                <tr>
                    <td><?php echo $j ?></td>
                    <td><?php echo $User[$i]["name"] ?></td>
                    <td><?php echo $User[$i]["password"] ?></td>
                    <td>
                        <button class='btn btn-warning'>
                            <a href="http://localhost/Demo1/test_session/xoa.php? id=<?php echo $i ?>">Delete</a>
                        </button>
                    </td>
                </tr>

                <?php 
                       $j++; 
                    }
                }
                    $_SESSION['array'] = $User;
                ?>   
            </tbody>
            </table>
            <!-- <div>
                <button class="btn btn-warning" type="submit" name="submit">
                    <a href="http://localhost/Demo1/btvn-session/them.php">Thêm</a>
                </button>
                
            </div> -->
        
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