<?php
include_once('connect_database.php');

if(isset($_REQUEST['username']) AND !empty($_REQUEST['username']))
{
    $username=$_REQUEST['username'];
}
else{
    header("Location: ../dangky.html");
}

if(isset($_REQUEST['password']) AND !empty($_REQUEST['password']))
{
    $password=$_REQUEST['password'];
}
else{
    header("Location: ../dangky.html");
}

if(isset($_REQUEST['email']) AND !empty($_REQUEST['email']))
{
    $email=$_REQUEST['email'];
}
else{
    header("Location: ../dangky.html");
}



$sql="INSERT INTO customer 
    SET 
    username='$username',
    password='$password',
    email='$email'
";
if(mysqli_query($conn, $sql))
{
    header("Location: ../Project_CN_BanHang.html");
}
else{
    header("Location: ../dangky.html");
}