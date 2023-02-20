<?php
include "class.database.php";
global $conn;
?>

<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar_login.png" class="avatar">

    <?php
        if ($_POST) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = mysqli_query($conn, "SELECT * from user where email='$username' and password='$password' ");
            $row = mysqli_fetch_assoc($result);

            $result_name = mysqli_query($conn, "SELECT * from user where email='$username'");
            $name = mysqli_fetch_assoc($result_name);
            // if ($name) {
            //   echo "<p style='color: red; text-align: center'> Password is incorrect <p> <br> ";
            // }

            $result_pass = mysqli_query($conn, "SELECT * from user where password='$password'");
            $pass = mysqli_fetch_assoc($result_pass);
            // if ($pass) {
            //   echo "<p style='color: red; text-align: center'> email is incorrect <p> <br> ";
            // }

            // var_dump($row);
            // die;
            if ($row) {
              header("Location: https://www.youtube.com/");
              exit;
            }
            elseif($name) {
              echo "<p style='color: red; text-align: center'> Password is incorrect <p> <br> ";
            }
            elseif($pass) {
              echo "<p style='color: red; text-align: center'> Email is incorrect <p> <br> ";
            }
             else {
              echo "<p style='color: red; text-align: center'> Account is not exits ! <p> <br> ";
          }

            
            
        }
        ?>

        <h1>Login Here</h1>
            <form method='post'>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password?</a>  <br>  
            <a href="#">Don't have an account?</a> 
            </form>
        </div>


    <?php
    // if(isset($_POST['submit'])) {
    //     $name = $_POST['username'];
    //     $password = $_POST['password'];
    //     if ($name ==  'Antupnv24b' && $password == '1234') {
    //         echo "<script> alert('Logged in successfully !') </script>";
    //         header("Location: https://www.facebook.com/beo.ong.5851 ");
    //     }
    //     else {
    //         echo "<script> alert('Login failed !') </script>";
    //     }
    // } 
    ?>
    </body>
</html>