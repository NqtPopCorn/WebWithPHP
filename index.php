<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .header{
    background-color: blue;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.topmenu{
    padding: 3px;
    display: flex;
    gap: 5px;
    background-color: aquamarine;
}
.topmenu div{
    border: 2px solid red;
    background-color: black;
    color: white;
}
.block-content {
    display: grid;
    grid-template-columns: 1fr 3fr 1fr;
}
.left-menu{
    background-color: yellow;
    padding: 3px;
}
.left-menu-list{
    border-radius: 5px;
    background-color: white;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.list {
    border-radius: 5px;
    border: 2px solid blue;
    display: flex;
    flex-direction: column;
    gap: 4px;
    padding: 4px;
}
.list > a{
    border: 2px solid red;
    border-radius: 5px;
    text-decoration: none;
}
.content{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 10px;  
    border: 2px solid rgb(0, 0, 149);
    height: 1200px;
}
.right-content{
    background-color: rgb(85, 255, 0);
    height: 20px;
}
@media screen and (max-width:600px) {
    .topmenu{
        flex-direction: column;
    }
    .content{
        gap: 4px;  
    }
}

.signup {
    position: absolute;
    bottom: 0px;
    right: 0px;
    display: flex;
    gap: 4px;

}

.html {
    position: relative;
}


    </style>
</head>
<body>
    <header class="header">
        <div class="signup">
            <?php
                include("./pages/frmdangnhap.php");
                include("./pages/frmdangki.php");
            ?>
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
<?php include("statusModal.php"); ?>
</body>
</html>