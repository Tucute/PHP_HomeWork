<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar_login.png" class="avatar">
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
    if(isset($_POST['submit'])) {
        $name = $_POST['username'];
        $password = $_POST['password'];
        if ($name ==  'Antupnv24b' && $password == '1234') {
            echo "<script> alert('Logged in successfully !') </script>";
            header("Location: https://www.facebook.com/beo.ong.5851 ");
        }
        else {
            echo "<script> alert('Login failed !') </script>";
        }
    } 
    ?>
    </body>
</html>