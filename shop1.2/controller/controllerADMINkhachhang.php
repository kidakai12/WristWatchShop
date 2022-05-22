
<?php
include '../connect/connect.php';
include('../DatabaseHelper.php');
$db2=connection();
$db=new connect();
$id=$_POST['id'];
$tenkh=$_POST['tenkh'];
$sdt=$_POST['sdt'];
$diachi=$_POST['diachi'];
$username=$_POST['username'];
$matkhau=$_POST['matkhau'];
$email=$_POST['email'];
$db2->exec("UPDATE khachhang SET `TENKH`='$tenkh',`SDT`='$sdt',`DIACHI`='$diachi',`USERNAME`='$username',`PASSWORD`='$matkhau',`EMAIL`='$email' WHERE `MAKH`=$id ");
echo "<script>alert('Chỉnh sửa thành công');window.location.href='../adminuser.php'</script>";
exit;
?>