<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tu_database";
global $conn;
$conn =  mysqli_connect("localhost", "root", "");
if (!$conn){
    die("Connect is fails:" . mysqli_error($conn));
}
    mysqli_select_db($conn, $db);


?>