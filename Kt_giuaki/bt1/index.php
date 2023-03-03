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
        .signup{
            display: flex;
            justify-content: center;
        }
        .signup-box {
            width: 400px;
        }
        .username {
            display: flex;
        }
        #fname {
            margin-right: 10px;
        }
        .btn {
            width: 400px;
            font-weight: bold;
        }
        td {
            margin-left: 10px;
        }
    </style>
</head>

<body>
<body>
    <div class="signup"> 
        <div class="signup-box">
            <h1>Sign up Here</h1>
            <br>


            <form method='post'>
                <input type="text" name="email" class="form-control" placeholder="Work email">
                <br>
                <div class="username">
                    <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                </div>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                <br>
                <button type="submit" name="btn" class="btn btn-danger ">Sign up</button>
            </form>
            <br>
            <br>

            <?php
            if(isset($_POST['btn'])) {

                function checkfirstname($firstname){

                    if(empty($firstname)){
                        return "Firstname không được để rỗng <br>";
                    }
                    else {
                        if(is_string($firstname)) {
                            return "true";                       
                        }
                        else {
                            return "First Name không được chứa số <br>";
                        }
                    }
                }
                function checklasttname($lastname){
                    if(empty($lastname)){
                        return "Lastname không được để rỗng <br>";
                    }
                    else {
                        if(is_string($lastname)) {
                            return "true";
                        }
                        else {
                            return "Last Name không được chứa số <br>";                           
                        }
                    }
                }
                function checkPassword($pass){
                        $n=strlen($pass);
                        if(empty($pass)){
                            return "Mật khẩu không được để rỗng <br>";
                        }
                        elseif($n>=8) {
                            return "Mật khẩu không quá 8 kí tự <br>";  
                        }
                        else {
                            return "true";
                        }
                    }

                function checkEmail($email) {
                    if (empty($email)){
                        return "Email không được để rỗng <br>";
                    }
                    else {
                        return "true";
                    }
                }

                $email=$_POST['email'];
                $Cemail=checkEmail($email);

                $fname = $_POST['fname'];
                $Cfname=checkfirstname($fname);

                $lname = $_POST['lname'];
                $Clname=checklasttname($lname);

                $password = $_POST['password'];
                $Cpassword=checkPassword($password);

                if ($Cemail == "true" && $Cpassword == "true" && $Cfname == "true" && $Clname == "true") {
                    echo "<table class='table'>";
                    echo "<tr>";
                    echo "<th>Email</th>";
                    echo "<th>FirstName</th>";
                    echo "<th>LastName</th>";
                    echo "<th>Password</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>".$email."</td>";
                    echo "<td>".$fname."</td>";
                    echo "<td>".$lname."</td>";
                    echo "<td>".$password."</td>";
                    echo"</tr>";
                    echo "</table>";
                }
                else {
                    if ($Cemail != "true") {
                        echo $Cemail;
                    }
                    if($Cfname != "true") {
                        echo $Cfname;
                    }
                    if ($Clname != "true") {
                        echo $Clname;
                    }
                    if ($Cpassword != "true") {
                        echo $Cpassword;
                    }
                }
            } 
            ?>
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