<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="submit" name="btn">
    </form>
    <?php
        if(isset($_POST['btn'])) {
            $user=$_POST['name'];
            $_SESSION['username']=$user;
            header("Location: session2.php");
        }
    ?>
</body>
</html>