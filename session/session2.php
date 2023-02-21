<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['username'])) {
            echo "hello ". $_SESSION['username'];
        }
        // huy bo bien session
        // unset($_SESSION['tenbien']);
    ?>
</body>
</html>