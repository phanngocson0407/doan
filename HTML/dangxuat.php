<?php
session_start();

unset($_SESSION['tenkhachhang']);
header("Location: ../HTML/dangnhap.php");