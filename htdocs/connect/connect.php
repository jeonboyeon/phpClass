<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "phpClass";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    // $host = "wjsqhdus971007.dothome.co.kr";
    // $user = "wjsqhdus971007";
    // $pass = "Jby971007!";
    // $db = "dothome";
    // $connect = new mysqli($host, $user, $pass, $db);
    // $connect -> set_charset("utf8");

    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>