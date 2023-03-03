<form action="" method="post">
    Nhập số: 
    <input type="number" name="number">
    <input type="submit" name="btn">

</form>

<?php
function myfunction($a) {
    $str='';
    for($i=1; $i<=
    $a; $i++ ){
    $str=$str.(string)$i.",";
    }
    return $str;
}
if (isset($_POST['btn'])) {
    $n=$_POST['number'];
    echo myfunction($n);
}
?>