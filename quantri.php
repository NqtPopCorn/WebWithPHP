<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>
    <p> Dang la trang quan tri</p>
    <?php 
        if(isset($_SESSION["nguoidung"])) {
            echo "Xin chao ".$_SESSION["nguoidung"];
        }
        #in cac quyen cua nguoi dung
        

    ?>
</body>
</html>