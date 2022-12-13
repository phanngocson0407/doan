<?php
session_start();
include_once('connect_database.php');
if(isset($_REQUEST['username']) AND !empty($_REQUEST['username']))
{
    $username=$_REQUEST['username'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/thanhtoan.php");
}

if(isset($_REQUEST['city']) AND !empty($_REQUEST['city']))
{
    $city=$_REQUEST['city'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/thanhtoan.php");
}

if(isset($_REQUEST['address']) AND !empty($_REQUEST['address']))
{
    $address=$_REQUEST['address'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return header("Location: ../HTML/thanhtoan.php");
}

if(isset($_REQUEST['phone']) AND !empty($_REQUEST['phone']))
{
    $phone=($_REQUEST['phone']);
}
else{
    $_SESSION['err']="Không được bỏ trống";
    return  header("Location: ../HTML/thanhtoan.php");
}

if(isset($_REQUEST['email']) AND !empty($_REQUEST['email']))
{
    $email=$_REQUEST['email'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
   return header("Location: ../HTML/thanhtoan.php");
}
if(isset($_REQUEST['more']) AND !empty($_REQUEST['more']))
{
    $more=$_REQUEST['more'];
}
else{
    $_SESSION['err']="Không được bỏ trống";
   return header("Location: ../HTML/thanhtoan.php");
}



$sql="INSERT INTO don_hang 
    SET 
    username = '$username',
    city = '$city',
    address ='$address',
    phone='$phone',
    email='$email',
    more='$more'
";
if(mysqli_query($conn, $sql))
{
    $_SESSION['err']="";
    return header("Location: ../HTML/thongbaodonhang.php");
}
else{
    return header("Location: ../HTML/thanhtoan.php");
}