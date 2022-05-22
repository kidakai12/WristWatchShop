<?php
//Kết nối database
include('DatabaseHelper.php');
    $db=connection();

//LẤY THÔNG TIN TRONG FORM ĐĂNG KÝ
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$name=$firstname.$lastname;
$email=$_POST['email'];
$sdt=$_POST['sdt'];
$password=$_POST['pass'];
$passwordre=$_POST['passre'];
$addressfull=$_POST['address']." ".$_POST['city']." ".$_POST['district'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$agree=isset($_POST['agree']);

//Kiểm tra đã nhập đủ chưa
/*if (!$firstname || !$lastname || !$email || !$sdt || !$password || !$passwordre || !$address || !$city || !$district ) 
{
    echo "<script>alert('Vui lòng điền đầy đủ thông tin vào');window.location.href='../dangky.php';
        </script>";
    exit;
}*/


//Kiểm tra password có trùng nhau hay không
if($password != $passwordre){
    echo "<script>alert('Mật khẩu điền vào không trùng khớp');window.location.href='../dangky.php';
    </script>";
    exit;
}
//Kiểm tra điều khoản
if(!$agree){
    echo "<script>alert('Bạn phải chấp nhận các điều khoản đã được đưa ra');window.location.href='../dangky.php';
        </script>";
    exit;
}
//Kiểm tra và cấp mã khách hàng
$makh=1;
$trangthai=0;
$row = $db->prepare("SELECT MAKH FROM khachhang ORDER BY MAKH ");
$row->setFetchMode(PDO::FETCH_ASSOC);
$row->execute();
//THÊM THÔNG TIN CỦA TÀI KHOẢN ĐĂNG KÝ THÀNH CÔNG VÀO DATABASE
$pstmt=$db->exec("INSERT INTO khachhang(MAKH,TENKH,SDT,DIACHI,USERNAME,PASSWORD,EMAIL) VALUES(null,
'$name','$sdt','$addressfull','$email','$password','$email');");
if($pstmt>0){
    echo "<script>alert('Chúc mừng $name đã đăng ký thành công, xin mời bạn đăng nhập');window.location.href='./dangnhap.php';
    </script>";
    exit();
}else{
    echo "<script>alert('Đăng ký thất bại do có sự cố kĩ thuật');window.location.href='./dangky.php';
    </script>";
    exit();
}
?>