<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
        <input type="file" name="file_up"">
        <input type="submit" name="btn" value="upload file">
    </form>
    <?php
        if(isset($_POST['btn'])) {
            if(isset($_FILES['file_up'])) {
                $file=$_FILES['file_up'];
                $tenfile=$file['name'];
                move_uploaded_file($file['tmp_name'],$tenfile);
    ?>
    <img src="<?php echo $tenfile ?>" alt="">
    <?php
            }
        }
    ?>
</body>
</html>