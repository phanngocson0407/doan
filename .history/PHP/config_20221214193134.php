<?php
$conn =  new mysqli("localhost","root","","do_an");
mysqli_set_charset($conn, "utf8");
if($conn ->connect_error){
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>