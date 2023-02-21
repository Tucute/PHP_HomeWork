<?php
    session_start();
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
        $user=array("tu"=>"tu2002","minh"=>"minh123456","quang"=>"quang123","xuan"=>"xuancute123");

        $_SESSION=['array'] = $user;

          if(isset($_POST["btn"])){
            $name = $_POST["username"];
            $pass = $_POST["password"];
            $result=0;
            foreach($user as $key => $value){
              if ($name == $key){
                if ($pass == $value) {
                    $result=1;
                    break;
                }
                else {
                    $result=2;
                    break;
                }
              }
            }
            if ($result == 1){
                echo "Dang nhap thanh cong";
                header("Location: admin.php ");
            }
            elseif ($result == 2) {
                echo "<p style='color: red; text-align: center'> Password is incorrect ! <p> <br> ";
            }
            else {
                echo "<p style='color: red; text-align: center'> Account is not exits ! <p> <br> ";
            }
                
         }
    ?>

        <h1>Login Here</h1>
            <form method='post'>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" value="<?php if(isset($_POST['btn'])) echo $_POST['username'] ?>">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" value="<?php if(isset($_POST['btn'])) echo $_POST['password'] ?>">
            <input type="submit" name="btn" value="Login">
            <a href="#">Forgot Password?</a>  <br>  
            <a href="#">Don't have an account?</a> 
            </form>
        
        </div>
    </body>
</html>