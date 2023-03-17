<?php
$connect =  mysqli_connect("localhost", "root", "","tu_database");
if (!$connect){
    die("Connect is fails:" . mysqli_error($connect));
}
?>