<?php
include "db.php";
global $conn;
?>
<?php
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM products WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        echo "Xóa thành công";
        header("Location: index.php");
    }
    else {
        echo "Lỗi kết nối database". mysqli_error($conn);
    }
}
?>