<?php
include "class.database.php";
global $conn;
?>
<?php
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM users WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        header("Location: index.php");
    }
    else {
        echo "Lỗi kết nối database". mysqli_error($conn);
    }
}
?>