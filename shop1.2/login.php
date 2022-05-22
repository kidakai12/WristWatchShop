<?php
//Xử lý đăng nhập
session_start();
    //Kết nối tới database
    include 'connect/connect.php';
    include('DatabaseHelper.php');
    $db=new connect();
    $db2=connection();  


    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username=="admin" && $password=="admin"){
        echo "<script>alert('Chào mừng admin');window.location.href='adminproduct.php';</script>";
        exit;
    }

     //tạo biến lưu mã khách hàng
     $makh;
     $sql = "SELECT * FROM `khachhang` WHERE USERNAME='$username' ";
    $row = $db2->prepare($sql);
    $row->setFetchMode(PDO::FETCH_ASSOC);
    $row->execute();
    $ril=$row->fetchAll();
    foreach ($ril as $riller)
        $makh=$riller['MAKH'];


    //Kiểm tra tên đăng nhập có tồn tại không
    //Lấy tài khoản trong database ra
    $row = $db2->query("SELECT USERNAME FROM khachhang WHERE USERNAME='$username' ");
    //So sánh 2 tài khoản có trùng khớp hay không
        if($row->rowCount()==0){
            echo "<script>alert('tên đăng nhập không tồn tại');window.location.href='dangnhap.php';
    </script>";
            exit; 
        }
    //Lấy mật khẩu trong database ra
    $row = $db2->query("SELECT PASSWORD FROM khachhang WHERE USERNAME='$username' ;");
    $row->setFetchMode(PDO::FETCH_ASSOC);
    $row->execute();
    while($row1 = $row->fetch()) {
        if($password!=$row1['PASSWORD']){
            echo "<script>alert('Nhập sai mật khẩu');window.location.href='dangnhap.php';</script>";         
            exit; 
        }
    }


    //TRUY XUẤT BẢNG HÓA ĐƠN của USER đăng nhập
    $_SESSION['khachhang']=$makh;
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    $sql = "SELECT * FROM `order` WHERE `order`.MAKH=$makh";
    $row = $db2->prepare($sql);
    $row->setFetchMode(PDO::FETCH_ASSOC);
    $row->execute();
        if($row->rowCount()==0){
            $db2->exec("INSERT INTO `order`(idord,MAKH) VALUES(null,$makh)");
        }
  echo "<script>alert('Xin chào $username. Bạn đã đăng nhập thành công');window.location.href='index.php';</script>";
    //THOÁT CHUONG TRÌNH//
?>