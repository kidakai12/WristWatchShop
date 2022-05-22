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
    $count;
    $row2=$db->chen("SELECT COUNT(idorder) as total FROM `orderlist` WHERE idorder=$mahoadon ");
    while($row1 = $row2->fetch()) 
    {
        $count=$row1["total"];
    }
  //ĐẾM SỐ LƯƠNG SẢN PHẨM TRONG GIỎ
    //lưu số lượng vào session
//Chức năng thêm vào giỏ hàng

if(isset($_GET['id']))
    {
        if($_GET['id']) 
        {
            $masp=(int)$_GET['id'];
            //Truy Xuất hóa đơn 
            $rowhoadon = $db->chen("SELECT * FROM `orderlist` WHERE iditem=$masp AND idorder=$mahoadon");
            while($row1=$rowhoadon->fetch()) 
            {
                //Nếu hóa đơn đã được tạo rồi
                if($mahoadon==$row1['idorder'])
                {   
                 //nếu sản phẩm đã có rồi
                    if($masp==$row1['iditem'])
                    {
                        $them=(int)$row1['amount'];
                        $them++;
                        $db->chen("UPDATE `orderlist` SET `amount`=$them WHERE iditem=$masp AND idorder=$mahoadon");
                        echo"<script>alert('Thêm sản phẩm vào giỏ thành công');</script>";
                        $count++;
                        break;
                    }
                }
            }
            //nếu không có thì auto thêm vào
            $check=$db2->exec("INSERT INTO `orderlist` VALUES($mahoadon,$masp,1)");
            if($check>0){
                echo"<script>alert('Thêm sản phẩm vào giỏ thành công');</script>";
                $count++;
            }
        }
    }
    $_SESSION['cart']=$count;
}
if(isset($_GET['kiemtra']))
{
    if(!isset($_SESSION['username']) || $_SESSION['username']="")
    echo"<script>alert('Xin đăng nhập để bắt đầu mua hàng');window.location.href='dangnhap.php'</script>";
}
?>