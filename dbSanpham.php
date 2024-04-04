<?php
    $sql = "select * from sanpham";
    if(isset($_GET['theloai'])) $sql = "select * from sanpham where matl = '{$_GET['theloai']}'";
    $query = ConnectDatabase::query($sql);
?>
<div class="container">
<table class="table-bordered table table-hover">
    <thead class="table-info">
        <?php
            $fields = mysqli_fetch_fields($query);
            $count = 0;
            foreach($fields as $field) {
                echo "<td>{$field->name}</td>";
                $count++;
            }
        ?>
    </thead>
    <?php
        while($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            for($i = 0; $i < 5; $i++) {
                echo "<td>{$row[$i]}</td>";
            }
            //thong thuong thi nen fetch trong try catch truoc de tranh gay loi
            echo "<td><img src='{$row[5]}' style='height: 50px;'></img></td>";
            echo "</tr>";
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
