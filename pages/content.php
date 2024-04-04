<?php
    if(isset($_GET['opt'])) {
        $opt = $_GET['opt'];
        echo $opt;
    }
    else if(isset($_GET['frmtinhtoan'])) {
        include("./pages/frmtinhtoan.php");
    }
    else if(isset($_GET['sanpham'])) {
        include("./dbSanpham.php");
    }
    else if(isset($_GET['theloai'])) {
        include("./dbSanpham.php");
    }
    
?>
