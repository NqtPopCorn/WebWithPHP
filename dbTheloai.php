<?php
    $sql = "select * from theloai";
    $query = ConnectDatabase::query($sql);
    $count = 0;
    while($row = mysqli_fetch_array($query)) {
        $matl = $row["matl"];
        $tentl = $row["tentl"];
        echo "<a href='index.php?theloai=$matl'>$tentl</a>";
    }
?>
