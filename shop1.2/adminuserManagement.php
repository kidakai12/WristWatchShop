<?php
session_start();
include 'connect/connect.php';
include('DatabaseHelper.php');
    $db2=connection();
//KIỂM TRA CÓ ĐĂNG NHẬP HAY CHƯA
$db=new connect();
    if(isset($_GET['action']))
    {
        //NẾU LÀ BẠN BẤM NÚT SỬA
        if($_GET['action']=="fix") 
        {
            //LẤY ID của khách hàng đó
            $makh=(int)$_GET['id'];
            //Truy Xuất THÔNG TIN CỦA KHÁCH HÀNG
            $rowkhachang = $db->chen("SELECT * FROM khachhang WHERE MAKH=$makh");

            $tenkh;$sdt;$diachi;$taikhoan;$matkhau;$email;
            while($row1=$rowkhachang->fetch()) 
            {
                    $tenkh=$row1['TENKH'];
                    $sdt=$row1['SDT'];
                    $diachi=$row1['DIACHI'];
                    $taikhoan=$row1['USERNAME'];
                    $matkhau=$row1['PASSWORD'];
                    $email=$row1['EMAIL'];
            }
        }
        //NẾU BẤM NÚT XÓA
        if($_GET['action']=="delete") {
            //LẤY ID của khách hàng đó
            $makh=(int)$_GET['id'];
             //XÓA KHÁCH HÀNG ĐÓ
            $db2->exec("DELETE FROM khachhang WHERE MAKH=$makh");
            //THÔNG BÁO XÓA VÀ CHUYỂN VỀ TRANG DANH SÁCH
            echo "<script>alert('Đã xóa thành công');window.location.href='adminuser.php'</script>";
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ClockWork&reg; | Đồng Hồ Của Thế Giới</title>
    <meta charset="UTF-8" />
    <meta name="keywork" content="đồng hồ" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            max-width: 100%;
            height: auto;
            transition: 0.3s;
        }

        a {
            text-decoration: none;
            color: black;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;

        }

        a:hover {
            content: ".";
        }

        ul li {
            list-style: none;
        }

        img {
            vertical-align: middle;
        }

        .fa {
            margin: 0 0 0 15px;
        }

        .fa-chevron-left,
        .fa-phone,
        .fa-bars {
            color: #808080;
        }

        .wrapper {
            margin: 0 1%;
            display: flex;
            flex-direction: row;
            min-height: 990px;
            width: 100%;
        }

        .header {
            flex-direction: column;
            width: 306px;
            max-height: 100%;
            background-color: #7f7f7f;


        }

        .header a {
            color: white;
        }

        .logo {
            margin: 0 10px;
        }

        .navigate,
        .danhmuc,
        .submenu>a {
            border-top: 1px solid white;
            border-bottom: 1px solid white;
        }

        .body {
            display: flex;
            flex-direction: row;
        }

        .navigate {
            background: #7f7f7f;
            font-size: 20px;
            width: 306px;
        }

        div.navigate>div {
            padding: 15px 0;
        }

        .navigate i {
            font-size: 25px;
        }

        .danhmuc a {
            padding: 10px 0;
        }

        .danhmuc:hover .submenu {
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: visible;
            transition: 0.3s;
        }

        .ip::before {
            content: "▼";
            position: relative;
            color: white;
            width: 10px;
            height: 100%;
            top: 0;
            left: 90%;
        }

        .submenu {
            display: none;
            background-color: #7f7f7f;

        }

        .submenu a {
            background-color: #7f7f7f;
            width: 100%;
            text-align: center;
            margin: 5px 0;
            position: relative;
        }

        div.submenu>a::before {
            content: "";
            position: absolute;
            background: #eeeeee;
            width: 10px;
            height: 100%;
            top: 0;
            left: 0;
            transition: 0.3s;
            opacity: 0;
        }

        .submenu a:hover::before {
            opacity: 1;
        }

        div.submenu>a:hover {
            position: relative;
            left: 10px;
            opacity: 0.5;
        }
        .wrapcontainer {
            display: flex;
            flex-direction: column;
            width: 100%;
            border-left: 2px solid white;
        }
        .information {
            display: flex;
            flex-direction: column;
            height: 63px;
            border-bottom: 1px solid white;
            background-color: #7f7f7f;
            justify-content: center;

        }

        .information a {
            color: white;
            margin: 0px 5px;


        }

        .container {
            margin: 0 0 0 10px;
        }

        .addNV div {
            display: block;

            margin: 20px 0;
            font-size: 20px;
        }

        .container input[type=text] , .container input[type=file] {
            width: 50%;
            position: absolute;
            left: 550px;
        }

        .ListEmployee {
            display: flex;
            flex-direction: row;
        }

        .ListEmployee a {
            border: 1px solid black;
            width: 50px;
        }
                       
        .ListEmployee table {
            border: 1px solid black;
                    
        }
        input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
input[type="tel"],
textarea {
    background: #fff;
    padding: 8px 15px;
    margin: 0px;
    border: 1px solid #cccccc;
    font-size: 14px;
    -webkit-border-radius: 15px;
    border-radius: 15px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="password"]:focus,
input[type="tel"]:focus,
textarea:focus {
    border-color: #ff8e87;
    outline: none;
} 
.button,
button {
    background: #fff;
    padding: 10px 20px;
    border: 1px solid #cccccc;
    font-size: 14px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    outline: none;
}

.button:hover,
button:hover {
    border: 1px solid red;
    color: red;
}

.add-cart {
    padding: 9px 30px;
}

.compare,
.wishlist {
    padding: 9px 10px;
    font-size: 18px;
}                       
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="head">
                <div class="logo"><a href="index.php"><img src="./img1/LOGOSAIGON.jpg" alt="FlatShop"></a></div>
            </div>
            <div class="navigate" id="navigate">
                <div>
                    <a href="dangnhapadmin.php"><i class="fa fa-home"> </i> Đăng xuất Admin</a>
                </div>
                <div class="danhmuc"><a href="adminproduct.php" ><i class="fa fa-server"></i> Quản Trị Sản Phẩm</a>
                </div>
                <div class="danhmuc" style="background-color: Black;"><a href="adminuser.php" ><i class="fa fa-user"></i> Tài Khoản Khách</a>
                </div>
                <div class="danhmuc"><a href="adminuser.php" ><i class="fa fa-user"></i>Hóa Đơn</a>
                </div>
            </div>
        </div>
        <div class="wrapcontainer">
            <div class="container">
                <form action="controller/controllerADMINkhachhang.php" method="POST">
                    <h1>EDIT Thông Tin Khách Hàng</h1>
                <div class="addNV">
                    <div class="input">
                        <div class="khung"><a href="">Tên Khách Hàng </a>
                            <input type="text" name="tenkh" value="<?php echo $tenkh; ?>">
                        </div>
                        <div class="khung"><a href="">Số Điện Thoại</a> 
                            <input type="text" name="sdt" value="<?php echo $sdt; ?>">
                        </div>
                        <div class="khung"><a href="">Địa Chỉ</a>
                            <input type="text" name="diachi" value="<?php echo $diachi; ?>">
                        </div>
                        <div class="khung"><a href="">Tên Tài Khoản</a>
                            <input type="text" name="username" value="<?php echo $taikhoan; ?>">
                        </div>
                        <div class="khung"><a href="">Mật Khẩu</a>
                            <input type="text" name="matkhau" value="<?php echo $matkhau; ?>">
                        </div>
                        <div class="khung"><a href="">Email </a>
                            <input type="text" name="email" value="<?php echo $email; ?>">
                        </div>
                        <button id="btn" class="btn btn-outline-secondary" name="id" value="<?php echo $makh; ?>">SỬA</button>
                        <button id="btn" class="btn btn-outline-secondary" type="reset">RESET</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>