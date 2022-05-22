<?php
if(isset($_GET['kiemtra']))
{
    if(!isset($_SESSION['username']) || $_SESSION['username']="")
    echo"<script>alert('Xin đăng nhập để bắt đầu mua hàng');window.location.href='dangnhap.php'</script>";
}
?>