<?php
    require "db.php";
?>
<?php
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM thanhvien WHERE id=$id";
    if(mysqli_query($connect, $sql)) {
        header("Location: index.php");
    }
    else {
        echo "Lỗi kết nối database". mysqli_error($conn);
    }
}
?>