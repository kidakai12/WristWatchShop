<?php
session_start();
 if (isset($_SESSION['username']) && $_SESSION['username']){
        unset($_SESSION['cart']);
        echo "<script>window.location.href='hoadon.php';</script>";
 }
 else
 {
    echo "<script>alert('để thanh toán vui lòng đăng nhập');window.location.href='dangnhap.php';
    </script>";
 }
?>