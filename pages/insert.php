<?php
require_once("C:/xampp/htdocs/myweb/ConnectDatabase.php");
// Check if the form is submitted   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the uploaded image file
    $image = $_FILES["hinh"];

    // Set the target directory for the image
    $targetDir = "/myweb/img/";

    // Generate a unique filename for the image
    $filename = $image["name"];

    // Set the target path for the image
    $targetPath = $_SERVER["DOCUMENT_ROOT"] . $targetDir . $filename;

    // Move the uploaded image to the target path
    // move_uploaded_file($image["tmp_name"], $targetPath);
    move_uploaded_file($image["tmp_name"], $targetPath);
    if (1) {
        // Image upload successful, now save the information to MySQL

        // Get other form data
        $masp = $_POST["masp"];
        $tensp = $_POST["tensp"];
        $matl = $_POST["matl"];
        $dongia = $_POST["dongia"];
        $hinh = $targetDir . $filename;

        echo $masp."<br>";
        echo $tensp."<br>";
        echo $matl."<br>";
        echo $dongia."<br>";;
        echo $hinh."<br>";

        // Prepare and execute the SQL query
        $sql = "INSERT INTO sanpham (masp, tensp, matl, dongia, hinh) VALUES ('$masp', '$tensp', '$matl', '$dongia', '$hinh')";
        if (ConnectDatabase::query($sql) != False) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: ";
        }
    } else {
        echo "Error uploading image";
    }
}
?>