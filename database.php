<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "123456";
    $db_name = "doanweb2";
    $conn = "";

    $conn = mysqli_connect($db_server, 
                           $db_user, 
                           $db_pass, 
                           $db_name);

    if($conn) {
        echo "You're connected";

        //close connection
        $conn -> close();
    }
    else {
        echo "Could not connected";
    }
?>