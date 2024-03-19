<?php
    $emailReg = "/\w{1,}@[A-z]{2,}\.[a-z]{2,}$/";
    $sdtReg = "/0[0-9]{9,10}/";
    $username = $_POST["username"];
    $pwd1 = $_POST["pwd1"];
    $pwd2 = $_POST["pwd2"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    
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
            if($query -> num_rows > 0) {
                header("Location: ../index.php?modalError=dangki&error=exist");
            }
            else {
                if(validate() == true) {
                    $sql = "insert into `taikhoan`(`mand`, `matkhau`, `email`, `sdt`, `ngaytao`) values('{$username}' , '{$pwd1}', '{$email}', '{$sdt}', CURRENT_DATE())";
                    $query = mysqli_query($conn, $sql);
                    header("Location: ../index.php?modalSuccess=dangki");
                    echo "Error: " . $e;
                }
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

    function validate() {
        global $username, $pwd1, $pwd2, $email, $sdt, $emailReg, $sdtReg;
        if($username == "" || $pwd1 == "" || $pwd2 == "" || $email == "" || $sdt == "") {
            header("Location: ../index.php?modalError=dangki&error=empty");
            return false;
        }
        else if($pwd1 != $pwd2) {
            header("Location: ../index.php?modalError=dangki&error=pwd");
            return false;
        }
        else if(preg_match($emailReg, $email) == false) {
            header("Location: ../index.php?modalError=dangki&error=email");
            return false;
        }
        else if(preg_match($sdtReg, $sdt) == false) {
            header("Location: ../index.php?modalError=dangki&error=sdt");
            return false;
        }
        return true;
    }
?>