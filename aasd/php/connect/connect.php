<?php
    $host = "localhost";
    $user = "hooong";
    $pw = "hungyu0219!";
    $db = "hooong";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo "Database Connect false";
    } else {
        // echo "Database Connect True";
    };
?>