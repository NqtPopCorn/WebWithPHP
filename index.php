<?php
    session_start();
    require_once("ConnectDatabase.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
         

    </style>
</head>
<body>
    <header class="header">
        <div class="signup">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frmDangnhapModal" id="frmDangnhap-btn">
                Đăng nhập </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frmDangkiModal" id="frmDangki-btn">
                Đăng kí </button>
        </div>
    </header>
    <div class="topmenu">
        <?php include("./pages/topmenu.php"); ?>
    </div>
    <div class="block-content">
        <div class="left-menu">
            <div class="left-menu-list">
                <div class="list">
                    <a href="index.php?opt=tc">Trang chu</a>
                    <a href="index.php?opt=ttts">Thong tin tuyen sinh</a>
                    <a href="index.php?opt=ttdt">Thong tin dao tao</a>
                    <a href="index.php?opt=lh">Lien he</a>
                </div>
                <div class="list">
                    <a href="#collapseExample" data-bs-toggle="collapse">Collapsible</a>
                    <div class="collapse show" id="collapseExample">
                        <div class="card card-body">
                            <?php include("dbTheloai.php"); ?>
                        </div>
                    </div>
                    <a href="index.php?sanpham=">San pham</a>
                    <a>Thong tin dao tao</a>
                    <a>Lien he</a>
                    <a>Thong tin lien he</a>
                    <a>abc</a>
                </div>
                <div class="list">
                    <a>ASUS</a>
                    <a>HP</a>
                    <a>Lenovo</a>
                    <a>DELL</a>
                    <a>HP</a>
                </div>
            </div>
        </div>
        <div class="content">
            <?php include("./pages/content.php"); ?>
        </div>
        <div class="right-content">
            <div>right</div>
        </div>
    </div>
</div>
<?php 
include("./pages/frmdangnhap.php");
include("./pages/frmdangki.php");
include("statusModal.php"); 
include("./pages/frmInsert.php");
?>
</body>
</html>