<?php
$conn =  new mysqli("localhost","root","","do_an");
if($conn ->connect_error){
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>