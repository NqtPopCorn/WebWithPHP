<?php
    if(isset($_GET['opt'])) {
        $opt = $_GET['opt'];
        echo $opt;
    }
    if(isset($_GET['frmtinhtoan'])) {
        include("./pages/frmtinhtoan.php");
    }
?>
