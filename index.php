<!DOCTYPE php>
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
</head>
<body>
    <header class="header">
        <?php 
            include("./pages/header.php");
        ?>
        <div class="signup">
            <a href="./pages/formdk.php">Dang ki</a>
            <a href="./pages/formdangnhap.php">Dang nhap</a>
            <a href="index.php?frmtinhtoan=">Tong 2 so</a>
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
                    <a>Trang chu</a>
                    <a>Thong tin tuyen sinh</a>
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

    
</body>
    <?php include("./pages/frmdangki.php"); ?>
</html>