<?php
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    
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
        $sql = "select * from `taikhoan` where `mand`='{$username}'";
        try {
            $query = mysqli_query($conn, $sql);
            if($username == "" || $pwd == "") {
                header("Location: ../index.php?modalError=dangnhap&error=empty");
            }
            else if($query -> num_rows > 0) 
            {
                $row = mysqli_fetch_array($query);
                if($row["matkhau"] == $pwd) {
                    header("Location: ../index.php?modalSuccess=dangnhap");
                }
                else {
                    header("Location: ../index.php?modalError=dangnhap&error=pwd");
                }
            }
            else {
                header("Location: ../index.php?modalError=dangnhap&error=username");
            }
        } catch (Exception $e) {
            echo "Error: " . $e;
        } finally {
            $conn -> close();
        }
    }
    else {
        echo "Could not connected";
    }
?>