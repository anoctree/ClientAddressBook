<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "db_clientaddressbook";

    $conn = mysqli_connect($server,$username,$password,$db);

    if (!$conn){
        die("connection dailed: " . mysqli_connect_error());
    }


?>