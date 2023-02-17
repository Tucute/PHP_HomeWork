<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation in HTML & CSS | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    

  <div class="wrapper">
    <header>Login Form</header>
    <form action="#">
      <div class="field email">
        <div class="input-area">
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="text" name="password" placeholder="Password">
        </div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" name="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div>
  </div>

  <?php
        if (isset($_POST['submit'])){
            $name=$_POST['name'];
            $password=$_POST['password'];
            if ($name == 'Admin' && $password == '123456') {
                echo" <script> alert('Đăng nhập thành công') </script> ";
            }
            else {
                echo" <script> alert('Đăng nhập thất bại') </script> ";
            }
        }
    ?>
</body>
</html>