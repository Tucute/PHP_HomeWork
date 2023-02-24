<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $User=array();
        $User[0]["name"]="Daily";
        $User[0]["password"]="1234";    
        $User[1]["name"]="Quang";
        $User[1]["password"]="2002";
        $User[2]["name"]="Nhat";
        $User[2]["password"]="1111";
        $User[3]["name"]="Di";
        $User[3]["password"]="5555";
        $User[4]["name"]="Thang";
        $User[4]["password"]="0001";
    ?>
    <form action="" method="post">
        <?php print_r($User) ?>
        <input type="submit" name="btn" value="Push data">
    </form>
    <?php 
        if(isset($_POST['btn'])) {
            $_SESSION['array'] = $User;
            header("Location: index.php");
        }
    ?>
</body>
</html>