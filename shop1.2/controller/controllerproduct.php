<?php
session_start();
include '../connect/connect.php';
include('../DatabaseHelper.php');
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
    //lưu số lượng vào session
//Chức năng thêm vào giỏ hàng
    if(isset($_GET['action']))
    {
        if($_GET['action']=="them") 
        {
            $masp=(int)$_GET['id'];
            $soluong=(int) $_POST['spluong'];
            //Truy Xuất hóa đơn 
            $rowhoadon = $db->chen("SELECT * FROM orderlist WHERE iditem=$masp AND idorder=$mahoadon");
            while($row1=$rowhoadon->fetch()) 
            {
                 //nếu sản phẩm đã có rồi
                    if($masp==$row1['iditem'])
                    {
                        $luongcong=$row1['amount']+$soluong;
                        $db->chen("UPDATE `orderlist` SET `amount`=$luongcong WHERE iditem=$masp AND idorder=$mahoadon");
                        echo"<script>alert('cập nhật sản phẩm vào giỏ thành công');window.location.href='../sanpham/1.php?spid=$masp';</script>";
                        exit;
                    }

            }
            $check=$db2->exec("INSERT INTO `orderlist` VALUES($mahoadon,$masp,1)");
            if($check>0){
                echo"<script>alert('Thêm sản phẩm vào giỏ thành công');window.location.href='../sanpham/1.php?spid=$masp';</script>";
                $count++;
                exit;
            }        
        }
    }
    //XÓA SẢN PHẨM KHỎI GIỎ
    if(isset($_GET['idspxoa']))
    {
        if($_GET['idspxoa']) 
        {
            $masp=(int)$_GET['idspxoa'];
            //Truy Xuất hóa đơn 
            $db->chen("DELETE FROM `orderlist` WHERE iditem=$masp AND idorder=$mahoadon");
            echo"<script>alert('xóa sản phẩm thành công');</script>";
            $count--;
        }
    }
    $_SESSION['cart']=$count;
}
//Kiểm tra nếu cố gắng vào giỏ hàng
if(isset($_GET['kiemtra']))
{
    if(!isset($_SESSION['username']) || $_SESSION['username']=="")
    echo"<script>alert('Xin đăng nhập để bắt đầu mua hàng');window.location.href='../dangnhap.php'</script>";
}
?>