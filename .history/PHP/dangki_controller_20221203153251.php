<?php
include_once('connect_database.php');
if(isset($_REQUEST['tenkhachhang']) AND !empty($_REQUEST['tenkhachhang']))
{
    $tenkhachhang=$_REQUEST['tenkhachhang'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/dangki.php");
}

if(isset($_REQUEST['phone']) AND !empty($_REQUEST['phone']))
{
    $phone=$_REQUEST['phone'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/dangki.php");
}

if(isset($_REQUEST['username']) AND !empty($_REQUEST['username']))
{
    $username=$_REQUEST['username'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/dangki.php");
}

if(isset($_REQUEST['password']) AND !empty($_REQUEST['password']))
{
    $password=$_REQUEST['password'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return  header("Location: ../HTML/dangki.php");
}

if(isset($_REQUEST['email']) AND !empty($_REQUEST['email']))
{
    $email=$_REQUEST['email'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
   return header("Location: ../HTML/dangki.php");
}



$sql="INSERT INTO user 
    SET 
    tenkhachhang = '$tenkhachhang',
    phone = '$phone',
    username='$username',
    password='$password',
    email='$email'
";
if(mysqli_query($conn, $sql))
{
    $_SESSION['err']="";
    return header("Location: ../HTML/dangnhap.php");
}
else{
    return header("Location: ../HTML/dangki.php");
}