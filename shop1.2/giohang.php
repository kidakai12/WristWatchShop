<?php include 'controller/controllergiohang.php';?> 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Giỏ Hàng
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
</head>
  <body>
    <div class="wrapper">
        <div class="header">
            <div class="container">
              <div class="row">
                <div class="col-md-2 col-sm-2">
                  <div class="logo">
                    <a href="index.php">
                      <img src="img1/logosaigon3.jpg" alt="FlatShop">
                    </a>
                  </div>
                </div>
                <div class="col-md-10 col-sm-10">
                  <div class="header_top">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="topmenu">
                               <li><marquee style="color: white;"><b>Hệ Thống Cửa Hàng Tại Sài Gòn Chuyên Bán Và Cung Cấp Các Loại Đồng Hồ Đeo Tay -Nhà Bán Lẻ Đồng Hồ Hàng Đầu Việt Nam</b></marquee></li>
                            </ul>
                         </div>
                         <?php
                     if (isset($_SESSION['username']) && $_SESSION['username']){
                        echo"<div class=\"col-md-3\">
                        <ul class=\"usermenu\">
                           <li><a href=\"#\" class=\"log\">Xin Chào ".$_SESSION['username']."</a></li>
                           <li><a href=\"logout.php\" class=\"reg\">Đăng Xuất</a></li>
                        </ul>
                     </div>";                    
                    }
                    else{
                         echo"<div class=\"col-md-3\">
                        <ul class=\"usermenu\">
                          <li>
                            <a href=\"dangnhap.php\" class=\"log\">
                              Đăng Nhập
                            </a>
                          </li>
                          <li>
                            <a href=\"dangky.php\" class=\"reg\">
                              Đăng Ký
                            </a>
                          </li>
                        </ul>
                      </div>";}
                      ?>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <div class="header_bottom">
                    <ul class="option">
                    <li id="search" class="search">
                              <form action="danhsach.php" method="GET"><input class="search-submit" type="submit" value=""><input name="search" placeholder="Tìm sản phẩm..." type="text" value="" name="search"></form>
                           </li>
                      <li class="option-cart">
                        <a href="giohang.php" class="cart-icon">Gio hang<span>
                          <a href="giohang.php "><span style="color:yellow; font-size: 20px;">
                          <?php echo $count;?></span></a>                          
                       </li>
                    </ul>
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">
                          Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                      </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">                          
                           <li><a href="index.php">Trang Chủ</a></li>
                           <li><a href="danhsach.php">Danh Mục Sản Phẩm</a></li>                      
                           <li><a href="lienhe.php">Liên Hệ</a></li>
                        </ul>
                     </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="page-index">
              <div class="container">
                <p style="font-size: 15px;">
                  Giỏ Hàng
                </p>
              </div>
            </div>
          </div>
            <div class="clearfix">
            </div>
            <div class="page-index">
              <div class="container">
                <p>
                  Trang chủ -> Thông Tin Khách Hàng 
                </p>
              </div>
            </div>
      <div class="clearfix"></div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <!----->
            <div class="col-md-12">
              <h3 class="title">
                Giỏ Hàng
              </h3>
              <div class="clearfix">
              </div>
              <?php
                $totalprice=0;
              ?>
              <?php
              $makh=6;
              $rowgio=$db->chen("SELECT * FROM `order` WHERE MAKH=$makh");          
              $giohang=$db->chen("SELECT `ordermash`.amount as soluong,`products`.`image` as hinhanh,`products`.`price` as giatien,`products`.`name` as tensp , `products`.`id` as masp , `products`.`danhcho` as gioitinh
              FROM (SELECT `orderlist`.`iditem`,`orderlist`.`amount` 
                FROM `order` 
                INNER JOIN `orderlist`  
                on `orderlist`.`idorder`=`order`.`idord` WHERE `orderlist`.`idorder`=$mahoadon ) as ordermash 
                INNER JOIN products on products.id=`ordermash`.iditem");
                if($count==0){
                  echo"<h1>Giỏ hàng hiện đang trống</h1>";
                }else
              while($rowgio2 = $giohang->fetch()) {
              ?>
              <table class="shop-table">
                  <thead>
                      <tr>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>                          
                        </th>
                        <th>
                          Số Lượng
                        </th>
                        <th>
                          Tổng Giá
                        </th>
                        <th>
                          
                        </th>
                      </tr>
                    </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src='<?php echo $rowgio2['hinhanh'];?>'>
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                            <?php echo $rowgio2['tensp'];?>
                        </div>
                        <p>
                          Mã Sản Phẩm : 
                          <strong class="pcode">
                          <?php echo $rowgio2['masp'];?>
                          </strong>
                        </p>
                      </div>
                    </td>
                    <td>
                      <h5>
                          <?php echo round($rowgio2['giatien']);?>$
                      </h5>
                    </td>
                    <td>
                      <form method="GET">
                    <input type="hidden" name="code" value="<?php echo $rowgio2['soluong'];?>">
                      <input type="hidden" name="masanp" value="<?php echo $rowgio2['masp'];?>">
                     <input type="number" id="soluongsp" name="soluongsp" value="<?php echo $rowgio2['soluong'];?>">
                     <br>
                     <br>
                     <input type="submit" value="Cập nhật"></input>
                    </form>
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                              <?php 
                              $tongia=$rowgio2['soluong']*$rowgio2['giatien'];
                                  echo round($tongia);
                               ?>$
                        </strong>
                      </h5>
                    </td>
                    <td>
                     <form method="post" action=''>
                      <input type="hidden" name="code" value="<?php echo $rowgio2['gioitinh'];?>">
                      <input type="hidden" name="action" value="remove">
                      <div class="button_group"><a href="giohang.php?idspxoa=<?php echo $rowgio2['masp'];?>">
                        <img src="images/remove.png" alt=""></a>
                      </div>
                    </form>
                    </td>
                  </tr>
                </tbody>
                 <?php  $totalprice=$totalprice+$tongia; ?>
              </table>
              <br>
            <?php 
             }
            ?>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                      Mã Giảm Giá
                    </h5>
                    <form>
                      <label>
                        Nhập Mã Giảm Giá Nếu Có
                      </label>
                      <input type="text" name="">
                      <div class="clearfix">
                      </div>
                      <button>
                        Đồng Ý
                      </button>
                    </form>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Tạm Tính
                      </h5>
                      <span>
                         <?php
                         echo round($totalprice) ;
                         ?>$
                      </span>
                    </div>
                    <div class="grandtotal">
                      <h5>
                        Thành Tiền
                      </h5>
                      <span>
                     <?php
                     $_SESSION['tongtien']=$totalprice;
                         echo round($totalprice) ;
                         ?>$
                      </span>

                    </div>
                    <button>
                      <a href="giohang.php?thanhtoan=true">
                      Thanh Toán</a>
                    </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-----><!-----><!-----><!----->
          </div>
      

          
          <div class="clearfix">
          </div>
          <div class="our-brand">
              <h3 class="title"><strong>Thương Hiệu </strong></h3>
              <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
              <ul id="braldLogo">
                    <ul class="brand_item">
                       <li>
                          <a href="#">
                             <div class="brand-logo"><img src="img1/Casio.png" width="180" height="60" alt=""></div>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                             <div class="brand-logo"><img src="img1/Citizen.png" width="180" height="60" alt=""></div>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                             <div class="brand-logo"><img src="img1/Seiko.png" width="180" height="60" alt=""></div>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                             <div class="brand-logo"><img src="img1/Skagen.png" width="180" height="60" alt=""></div>
                          </a>
                       </li>
                       <li>
                          <a href="#">
                             <div class="brand-logo"><img src="img1/Fossil.png" width="180" height="60" alt=""></div>
                          </a>
                       </li>
                    </ul>
              </ul>
           </div>
        </div>
     </div>
     <div class="clearfix"></div>
     <div class="footer">
        <div class="footer-info">
           <div class="container">
              <div class="row">
                 <div class="col-md-3">
                    <div class="footer-logo"><a href="#"><img src="img1/logosaigon2.jpg" alt=""></a></div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                    <h4 class="title">THÔNG TIN LIÊN HỆ <strong></strong></h4>
                    <p>Số 47 đường số 8,Xã Vĩnh Lộc B Huyện Bình Chánh TP.HCM</p>
                    <p>SĐT : 0909520341</p>
                    <p>Email : dzehox@gmail.com</p>
                 </div>
                 <div class="col-md-3 col-sm-6">
                    <h4 class="title">Hỗ trợ khách hàng<strong></strong></h4>
                    <ul class="support">
                       <li><a href="#">Hướng dẫn mua hàng</a></li>
                       <li><a href="#">Phương thức thanh toán</a></li>
                       <li><a href="#">Phương thức vận chuyển</a></li>
                       <li><a href="#">Chính sách bảo hành</a></li>
                    </ul>
                 </div>
                 <div class="col-md-3">
                    <h4 class="title">CHỨNG NHẬN <strong></strong></h4>
                    <img src="img1/noi-khong-voi-hang-gia.png" width="185" height="56" alt="">
                    <img src="img1/dathongbao.png" width="185" height="56" alt="">
                 </div>
              </div>
           </div>
        </div>
        <div class="copyright-info">
           <div class="container">
              <div class="row">
                 <div class="col-md-6">
                    <p>Copyright © 2019. Designed by <a href="#">Nhóm A16</a>. All rights reseved</p>
                 </div>
                 <div class="col-md-6">
                    <ul class="social-icon">
                       <li><a href="#" class="google-plus"></a></li>
                       <li><a href="#" class="twitter"></a></li>
                       <li><a href="#" class="facebook"></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>