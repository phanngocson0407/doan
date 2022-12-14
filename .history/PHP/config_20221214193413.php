<?php
$conn =  new mysqli("localhost","root","","do_an");
mysqli_set_charset($conn, "utf8");
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
if($conn ->connect_error){
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>