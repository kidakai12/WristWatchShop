<?php
session_start();
include 'connect/connect.php';
include('DatabaseHelper.php');
    $db2=connection();
//KIỂM TRA CÓ ĐĂNG NHẬP HAY CHƯA
$db=new connect();
$count=0;
if(isset($_SESSION['username']) && $_SESSION['username'])
{
    //LẤY ĐỐI TƯỢNG HÓA ĐƠN và CHI TIẾT HÓA ĐƠN
    //truy xuất chi tiết hóa đơn của user 
    $makh=$_SESSION['khachhang'];
    $row=$db->chen("SELECT * FROM `order` WHERE MAKH=$makh");
    //khởi tạo chi tiết hóa đơn
    $mahoadon=null;
    while($row1 = $row->fetch()) 
    {
        $mahoadon=$row1["idord"];
    }
    $row2=$db->chen("SELECT * FROM `orderlist` WHERE idorder=$mahoadon ");
        $count=$row2->rowCount();
  //ĐẾM SỐ LƯƠNG SẢN PHẨM TRONG GIỎ
}
if(isset($_GET['kiemtra']))
{
    if(!isset($_SESSION['username']) || $_SESSION['username']=="")
    echo"<script>alert('Xin đăng nhập để bắt đầu mua hàng');window.location.href='dangnhap.php'</script>";
}    
?>
