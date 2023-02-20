<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "tu_database";
    global $conn;
    $conn = mysqli_connect($servername, $username, $password);
    if ( !$conn) {
        die('Could not conect: '. mysqli_error($conn));
    }
    mysqli_select_db($conn, $db);
?>