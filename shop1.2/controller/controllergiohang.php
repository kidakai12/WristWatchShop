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
    //lưu số lượng vào session
//Chức năng thêm vào giỏ hàng
    if(isset($_GET['masanp']))
    {
        if($_GET['masanp']) 
        {
            $masp=(int)$_GET['masanp'];
            $soluong=(int) $_GET['soluongsp'];
            //Truy Xuất hóa đơn 
            $rowhoadon = $db->chen("SELECT * FROM orderlist WHERE iditem=$masp AND idorder=$mahoadon");
            while($row1=$rowhoadon->fetch()) 
            {
                 //nếu sản phẩm đã có rồi
                    if($masp==$row1['iditem'])
                    {
                        $db->chen("UPDATE `orderlist` SET `amount`=$soluong WHERE iditem=$masp AND idorder=$mahoadon");
                        
                        echo"<script>alert('cập nhật sản phẩm vào giỏ thành công');</script>";
                        break;
                    }
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
if(isset($_GET['kiemtra']))
{
    if(!isset($_SESSION['username']) || $_SESSION['username']=="")
    echo"<script>alert('Xin đăng nhập để bắt đầu mua hàng');window.location.href='dangnhap.php'</script>";
}
if(isset($_GET['thanhtoan'])){
    if($count>0){
    
    
    
    
    //LẤY CÁC GIÁ TRỊ CẦN THIẾT ĐỂ ĐƯA VÀO HÓA ĐƠN CHÍNH THỨC
    $tran=$db->chen("SELECT `order`.`idord` as id,`khachhang`.`TENKH` as tenkh,`khachhang`.`MAKH` as makh FROM `order` INNER JOIN `khachhang` ON `order`.`MAKH`=`khachhang`.`MAKH` WHERE `order`.`idord`=$mahoadon");
    //LẤY GIÁ TRỊ TỪ KẾT QUA TRAN
    $id;$tenkh;$makh;
    while($tranto=$tran->fetch()){
        $id=$tranto['id'];
        $tenkh=$tranto['tenkh'];
        $makh=$tranto['makh'];
    }
    $tongtien=$_SESSION['tongtien'];
    $tinhtrang="đang xử lý";
    $date= date('Y-m-d');
    $db2->exec("INSERT INTO `hoadon` VALUES($mahoadon,'$tenkh',$makh,'$date',$tongtien,'$tinhtrang')");
    $tran2=$db->chen(
        "SELECT  `products`.`price` as tien,`products`.`name` as tensp,`orderlist`.`idorder` as id,`products`.`id` as idsp,`orderlist`.`amount` as soluong 
        FROM `products` 
        INNER JOIN `orderlist` 
        ON `orderlist`.`iditem`=`products`.`id` 
        WHERE `orderlist`.`idorder`=$mahoadon
    ");
    $tensp;$iddetail;$idsp;$soluong;$tien;
    while($tranto=$tran2->fetch()){
        $tensp=$tranto['tensp'];
        $iddetail=$tranto['id'];
        $idsp=$tranto['idsp'];
        $soluong=$tranto['soluong'];
        $tien=$tranto['tien'];
        $tongtien2=$soluong*$tien;
        $db2->exec("INSERT INTO `chitiethoadon` VALUES($mahoadon,$idsp,'$tensp',$soluong,$tongtien2)");
    }
    $_SESSION['mahdphu']=$mahoadon;
    $db2->exec("DELETE FROM `order` WHERE  idord=$mahoadon");
    $db2->exec("INSERT INTO `order` VALUES(null,$makh)");
    echo"<script>window.location.href='hoadon.php'</script>";
    }
    else{
        echo"<script>alert('Bạn hiện tại không có sản phẩm nào trong giỏ cả')</script>";
    }
}
?>
