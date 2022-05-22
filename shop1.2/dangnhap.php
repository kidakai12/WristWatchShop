<?php include 'controller/kiemtra.php';include 'connect/connect.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Đăng Nhập
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
                      <div class="col-md-3">
                        <ul class="usermenu">
                          <li>
                            <a href="dangnhap.php" class="log">
                              Đăng Nhập
                            </a>
                          </li>
                          <li>
                            <a href="dangky.php" class="reg">
                              Đăng Ký
                            </a>
                          </li>
                        </ul>
                      </div>
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
                          <a href="giohang.php?kiemtra=true" class="cart-icon">Giỏ hàng</a>
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
                              <li>
                                 <a href="index.php">Trang Chủ</a>                                
                              </li>                    
                              <li>
                                 <a href="danhsach.php">Danh Mục Sản Phẩm</a>                                
                              </li>
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
                  Đăng nhập
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
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                 Bán Chạy
                  <strong>
                  </strong>
                </h4>


                <?php
                $db=new connect();
                  $result2=$db->chen("SELECT * FROM `products` LIMIT 3"); 
                while(/*$row=mysqli_fetch_assoc($result)*/ $row= $result2->fetch())
                {
                   ?>
                <div class="special-item">
                    <div class="product-image">
                      <a href="sanpham/1.php?spid=<?php echo $row['id'] ?>">
                          <img src="<?php echo $row['image']; ?>" width="200px" height="500px" alt="Product Name">
                      </a>
                    </div>
                    <div class="product-info">
                      <p>
                          <?php echo $row['name']; ?>
                      </p>
                      <h5 class="price">
                         <?php echo round($row['price']); ?>$
                      </h5>
                    </div>
                  </div>
                  <?php   }
                ?>
                 
                
              </div>                     
            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="dangnhap.php" class="step-title">
                      01. Đăng Nhập
                    </a>
                    <div class="step-description">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="new-customer">
                            <h5>
                              Bạn là người mới ?                            
                            </h5>                          
                            <p class="requir">
                              Việc tạo tài khoản sẽ giúp cho cửa hàng nắm bắt được thông tin của quý khách và phục vụ kịp thời theo yêu cầu của quý khách
                            </p>
                            <button>
                              <a href="dangky.php">Tạo Tài Khoản</a>
                            </button>
                            <button>
                              Trang admin
                              </button>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Đã là thành viên 
                            </h5>



                            <!--FORM ĐĂNG NHẬP-->
                            <form action="login.php" method="POST">
                              <div class="form-row">
                              <label class="lebel-abs">Tài khoản</label>
                              <input type="text" name="username" placeholder="nhập tài khoản" class="input namefild"  required/>
                            </div>
                              <div class="form-row">
                                  <label class="lebel-abs">Mật khẩu</label>
                              <input type="password" name="password" placeholder="nhập mật khẩu" class="input namefild"  required/>
                            </div>
                              <p class="forgoten">
                                <a href="#">
                                  Quên Mật Khẩu?
                                </a>
                              </p>
                              <button>Đăng nhập</button>
                              </form>
                            <!--FORM ĐĂNG NHẬP-->






                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="steps">
                    <a href="dangky.php" class="step-title">
                      02. Thông Tin Đăng Ký
                    </a>
                  </li>                
                </ol>
              </div>
            </div>
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
    <script src="javascript.js"></script>
  </body>
</html>