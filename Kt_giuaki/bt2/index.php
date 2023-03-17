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
        .row {
            margin-top: 20px;
            
        }
        .card {
            margin-right: 10px;
            margin-top: 10px;
            text-align: center; 
            /* box-shadow: 15px 15px 15px 15px rgb(0,0,0,0.1); */
        }
        .container{
            width: 899px;   
        }
        h4{
            color: orange;
            border-top: 1px solid orange;
            border-bottom: 1px solid orange;
            padding: 10px;
        }
        .oldprice {
            margin-left: 20px;
            text-decoration: line-through;
        }
        h3{
            text-align: center;
            border-top: 1px solid orange;
            padding-top: 40px;
            display: flex;
            text-align: center;
        }
        #bt {
            margin-left: 650px;
        }
        
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
  
    <div class="container">
        <div class="title">
            <h1>Danh mục sản phẩm</h1>
        </div>
        <br>
        <form action="" method='post'>
        <h4>GIÀY DÉP
            <button id="bt" class='btn btn-primary'>
                <a href="http://localhost/Demo1/Kt_giuaki/bt2/themgiay.php"> Thêm sản phẩm giày </a>
            </button>
        </h4>
        <div class="row">
            
            <?php
            $arr=$_SESSION['giay'];
            for($i=0;$i<count($arr);$i++) {

            ?>
            
            <div class="card" style="width: 18rem;">
            <img src= "<?php echo $arr[$i]['img']?>" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title"> <?php echo $arr[$i]['name'] ?> </h5>

                <?php 
                $new=$arr[$i]['newprice'];
                $old=$arr[$i]['oldprice'];
                if($new<$old) {
                    echo'<p class="card-text">'.$arr[$i]['newprice'].'<b class="oldprice">'.$arr[$i]['oldprice'].'</b></p>';
                }
                else {
                    echo'<p class="card-text">'.$arr[$i]['oldprice'].'</p>';
                }
                    
                ?>
                <button type="submit" name="btn" class="btn btn-warning">Đặt mua</button>
            </div>
            </div>
            
            <?php
            }
            ?>
        </div>
        <br>
        <h4>TÚI XÁCH
            <button id="bt" class='btn btn-primary'>
                <a href="http://localhost/Demo1/Kt_giuaki/bt2/themtui.php"> Thêm sản phẩm túi</a>
            </button>
        </h4>
        <div class="row">
        <?php
            $array=$_SESSION['tui'];
            for($i=0;$i<count($array);$i++) {

            ?>
            
            <div class="card" style="width: 18rem;">
            <img src= "<?php echo $array[$i]['img']?>" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title"> <?php echo $array[$i]['name'] ?> </h5>

                <?php 
                $new=$array[$i]['newprice'];
                $old=$array[$i]['oldprice'];
                if($new<$old) {
                    echo'<p class="card-text">'.$array[$i]['newprice'].'<b class="oldprice">'.$array[$i]['oldprice'].'</b></p>';
                }
                else {
                    echo'<p class="card-text">'.$array[$i]['oldprice'].'</p>';
                }
                    
                ?>
                <button type="submit" name="btn" class="btn btn-warning">Đặt mua</button>
            </div>
            </div>
            
            <?php
            }
            ?>
        </div>
        </form>
        <?php
        if(isset($_POST['btn'])) {
            echo"<script> alert('Đặt hàng thành công')</script>";
        }
        ?>
        <br>
        <h3>The end</h3>
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