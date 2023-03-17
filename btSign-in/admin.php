<?php
include "class.database.php";
global $conn;
?>

<html>
<head>
    <title> Form Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar_login.png" class="avatar">

    <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = mysqli_query($conn, "SELECT * from users where username='$username' and password='$password' ");       
            // $result_name = mysqli_query($conn, "SELECT * from users where username='$username'");
            // $result_pass = mysqli_query($conn, "SELECT * from users where password='$password'");
            $row = mysqli_fetch_assoc($result);

            // $name = mysqli_fetch_assoc($result_name);           
            // $pass = mysqli_fetch_assoc($result_pass);

            if ($row) {
              echo"Đăng nhập thành công, đi đến trang chủ";
              echo "<a href= 'index.php'> Trang chủ </a>";
            }
            // elseif($name) {
            //   echo "<p style='color: red; text-align: center'> Password is incorrect <p> <br> ";
            // }
            // elseif($pass) {
            //   echo "<p style='color: red; text-align: center'> Username is incorrect <p> <br> ";
            // }
             else {
              echo "<p style='color: red; text-align: center'> Đăng nhập thất bại ! <p> <br> ";
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
            <a href="them.php">Don't have an account? Sign up</a> 
            </form>
        </div>
    </body>
</html>