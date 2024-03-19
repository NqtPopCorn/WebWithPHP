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
        mysqli_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from theloai";
        $query = mysqli_query($conn, $sql);
        $count = 0;
        while($row = mysqli_fetch_array($query)) {
            $maTL = $row["maTL"];
            $tenTL = $row["tenTL"];
            echo "<a href='index.php?theloai=$maTL'>$tenTL</a>";
        }
        $conn -> close();
    }
    else {
        echo "Could not connected";
    }
?>
