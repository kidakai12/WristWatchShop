<?php 
include 'connect/connect.php';
include('DatabaseHelper.php');
$db=new connect();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>ClockWork&reg; | Đồng Hồ Của Thế Giới</title>
    <meta charset="UTF-8" />
    <meta name="keywork" content="đồng hồ" />
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
    
            .container input[type=text] , .container input[type=file],.container input[type=password] {
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
                margin: 20px 0;
                font-size: 20px;
                        
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
    div.ListEmployee{
            width: 100%;
            height: 554px;
            box-sizing: border-box;
            float: left;
            border: 3px solid red;
            overflow: scroll;
        }  
        th{
            white-space: nowrap
        }
        td{
            white-space: nowrap
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
                <div class="danhmuc" style="background-color: Black;"><a href="adminproduct.php" ><i class="fa fa-server"></i> Quản Trị Sản Phẩm</a>
                </div>
                <div class="danhmuc"><a href="adminuser.php" ><i class="fa fa-user"></i> Tài Khoản Khách</a>
                </div>
                <div class="danhmuc"><a href="adminhoadon.php" ><i class="fa fa-user"></i>Hóa Đơn</a>
                </div>
            </div>
        </div>
        <div class="wrapcontainer">
            <div class="container">
            <a id="btn" class="btn btn-outline-secondary" style="margin-top: 10px;" name="id" href="adminproductManagement2.php">THÊM SẢN PHẨM</a>
                <div class="ListEmployee">
                    <table class="table" border="2" width="10%">
                            <tr class="thead-dark">
                                <th>Hình Ảnh</th>
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giới Tính</th>
                                <th>Gía</th>
                            </tr>

                      <?php     
                      $laysp=$db->chen("SELECT * FROM `products`"); 
                             while($tranto=$laysp->fetch()){
       ?>
                        <tr style="height: 100px;">
                                <td><img src="<?php echo $tranto['image'] ?>" alt=""></td>
                                <td><?php echo $tranto['id'] ?></td>
                                <td><?php echo $tranto['name'] ?></td>
                                <td><?php echo $tranto['danhcho'] ?></td>
                                <td><?php echo $tranto['price'] ?></td>
                                <td><a href="adminproductManagement.php?action=fix&id=<?php echo $tranto['id']?>">Sửa</a></td>
                                <td><a href="adminproductManagement.php?action=delete&id=<?php echo $tranto['id']?>">Xóa</a></td>
                        </tr>
                             <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>