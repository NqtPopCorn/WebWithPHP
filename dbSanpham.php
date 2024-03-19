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
        $sql = "select * from sanpham";
        if(isset($_GET['theloai'])) $sql = "select * from sanpham where maTL = '{$_GET['theloai']}'";
        
        $query = mysqli_query($conn, $sql);
        $conn -> close();
    }
    else {
        echo "Could not connected";
    }
?>
<div class="container">
<table class="table-bordered table table-hover">
    <thead class="table-info">
        <?php
            $fields = mysqli_fetch_fields($query);
            $count = 0;
            foreach($fields as $field) {
                if($count < 4) echo "<td>{$field->name}</td>";
                $count++;
            }
        ?>
    </thead>
    <?php
        while($row = mysqli_fetch_array($query)) {
            // echo "<tr style='height: 20px'>";
            // for($i = 0; $i < mysqli_num_fields($query); $i++) {
            //     echo "<td>{$row[$i]}</td>";
            // }
            // echo "</tr>";

            echo "<tr>";
            for($i = 0; $i < 4; $i++) {
                echo "<td>{$row[$i]}</td>";
            }
            echo "</tr>";
            //thong thuong thi nen fetch trong try catch truoc de tranh gay loi
            echo "<img src='{$row[4]}'></img>";
        }
    ?>
</table>
</div>
<a href="">Thêm</a><br>
<a href="">Xóa</a><br>
<a href="">Sửa</a><br>
<?php
    // while($row = mysqli_fetch_array($query)) {
    //     echo "<tr style='height: 20px'>";
    //     echo "<td><input value='{$row[0]}' disabled></td>";
    //     for($i = 1; $i < mysqli_num_fields($query); $i++) {
    //         echo "<td><input value='{$row[$i]}'></td>";
    //     }
    //     echo "</tr>";
    // }
?>
