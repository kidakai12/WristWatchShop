<?php include 'controller/controllerIndex.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>SHOP ĐỒNG HỒ NAM NỮ CHÍNH HÃNG TẠI SÀI GÒN</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link rel="stylesheet" href="login.js">
      <link href="css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="img1/LOGOSAIGON.jpg" alt="FlatShop"></a></div>
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




                           //ĐĂNG NHẬP BẰNG SESSION
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
                      </div>";}?>
<!--------------------------------------------------------------------------------->



                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                    <ul class="option">
                       <li id="search" class="search">
                              <form action="danhsach.php" method="GET"><input class="search-submit" type="submit" value=""><input name="search" placeholder="Tìm sản phẩm..." type="text" value="" name="search"></form>
                           </li>
                           </li>
                      <li class="option-cart">
                          <a href="giohang.php?kiemtra=true" class="cart-icon">Gio hang<span>
                          <a href="giohang.php "><span style="color:yellow; font-size: 20px;">
                          <?php echo $count;?></span></a>                    
                       </li>
                    </ul>
<!--------------------------------------------------------------------------------->
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
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
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img src="img1/banner/casiog-shockbanner.jpg" alt="Los Angeles">
                                </div>
                                <div class="item">
                                  <img src="img1/banner/citizeneco-drive.jpg" alt="Chicago">
                                </div>
                                <div class="item">
                                  <img src="img1/banner/seikobanner.jpg" alt="New York">
                                </div>
                              </div>
                              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
            </div>
            <div class="promotion-banner">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                           <div class="promo-box"><img src="img1/dong-ho-co-1.jpg" alt=""></div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                           <div class="promo-box"><img src="img1/dong-ho-doi.jpg" alt=""></div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                              <div class="promo-box"><img src="img1/dong-ho-pin.jpg" alt=""></div>
                           </div>
                     </div>
                  </div>
            </div>
         </div>
         <div class="clearfix"></div>






<!------------------HIỂN THỊ SẢN PHẨM---------------------------------------------------------------> 


                       <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>ĐỒNG HỒ BÁN CHẠY NHẤT</strong></h3>
                  <?php
                  $result2=$db->chen("SELECT * FROM `products` LIMIT 4"); 
                while(/*$row=mysqli_fetch_assoc($result)*/ $row= $result2->fetch())
                {
                   ?>
                        <input type="hidden">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %10</div>
                                 <div class="thumbnail"><a href="sanpham/1.php?spid=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" width="200px" height="500px" alt="Product Name"></a></div>
                                 <div class="productname"><?php  echo $row["name"] ?></div>
                                 <h4 class="price"><?php echo round($row["price"]) ?> $</h4>
                                 <div class="button_group"><a href="./index.php?action=addtocart&id=<?php echo $row["id"] ?>" class="button add-cart" type="submit" name="action">Thêm vào giỏ</a></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
             <?php   }
                ?>
                </div>
                      </div>
<!---------------------------------------------------------------------------------> 



               <div class="container">
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Thương Hiệu </strong></h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                        <ul class="brand_item">
                           <li>
                              <a href="danhsach.php">
                                 <div class="brand-logo"><img src="img1/Casio.png" width="180" height="60" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="danhsach.php">
                                 <div class="brand-logo"><img src="img1/Citizen.png" width="180" height="60" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="danhsach.php">
                                 <div class="brand-logo"><img src="img1/Seiko.png" width="180" height="60" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="danhsach.php">
                                 <div class="brand-logo"><img src="img1/Skagen.png" width="180" height="60" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="danhsach.php">
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
                        <p>Copyright © 2019. Designed by <a href="lienhe.php">Nhóm A16</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="https://mail.google.com/mail/u/0/#inbox" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="https://www.facebook.com/hoc.vo.397948" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>