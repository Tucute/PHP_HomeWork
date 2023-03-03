<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Xóa</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
    <?php
        if(isset($_GET['id'])) {
            $id=$_GET['id'];
            echo $id;
            if (file_exists($fileDl)) {
                echo "Sorry, file already exists.";
            }
            else {
                unlink( $_SESSION['array'][$id]["file"]);
            }
            
            unset($_SESSION['array'][$id]);
            $dem=count($_SESSION['array']);
            for($i=$id;$i<$dem;$i++) {
                $_SESSION['array'][$i]['ten'] = $_SESSION['array'][$i+1]['ten'];
                $_SESSION['array'][$i]['gia'] = $_SESSION['array'][$i+1]['gia'];
                $_SESSION['array'][$i]['file'] = $_SESSION['array'][$i+1]['file'];
            }
            
            unset($_SESSION['array'][$dem]);
            print_r($_SESSION['array']);
            header("Location: index.php");
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