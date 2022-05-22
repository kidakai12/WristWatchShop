<?php session_start(); 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); 
    unset($_SESSION['hoadon']);
    unset($_SESSION['khachang']);// xóa session login
    echo "<script>window.location.href='dangnhap.php';</script>";
}
?>