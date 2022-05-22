<?php include 'controller/controllerdanhsach.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Danh Mục Sản Phẩm
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet">
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
                  <div class="clearfix">
                  </div>
                  <div class="header_bottom">
<!--------------------------------------------------------------------------------->





                    <ul class="option">
                       
                    <li id="search" class="search">
                              <form action="danhsach.php" method="GET"><input class="search-submit" type="submit" value=""><input name="search" placeholder="Tìm sản phẩm..." type="text" value="" name="search"></form>
                           </li>
                      <li class="option-cart">
                          <a href="giohang.php" class="cart-icon">Gio hang<span>
                          <a href="giohang.php "><span style="color:yellow; font-size: 20px;">
                          <?php echo $count; ?></span></a>                    
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
                           <li class="active dropdown">
                              <a href="index.php">Trang Chủ</a>                            
                           </li>                      
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
                  Thông tin sản phẩm
                </p>
              </div>
            </div>
          </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">




              <!---MENU BÊN PHẢI--------------------------------------------------------------------->
                <h3 class="title">
                  Dành Cho
                </h3>
                <ul>
                  <li>
                    <a href="?action=namonly&gioitinh=Nam" <?php if(isset($_GET['gioitinh']) && $_GET['gioitinh']=="Nam") echo 'style="color:red"'; ?>>
                      Nam
                    </a>
                  </li>
                  <li>
                    <a href="?action=nuonly&gioitinh=Nữ" <?php if(isset($_GET['gioitinh']) && $_GET['gioitinh']=="Nữ") echo 'style="color:red"'; ?>>
                      Nữ
                    </a>
                  </li>                 
                </ul>
              </div>
              <div class="price-filter leftbar">
                <h3 class="title">
                  Giá từ
                </h3>
                <form class="pricing" method="GET" action="">
                  <label>
                    
                    <input type="text" name="pricestart" placeholder="$">
                  </label>
                  <h3 class="title">
                  đến
                  </h3>
                  <label>
                   
                    <input type="text" name="priceend" placeholder="$">

                  </label>
                  <button name="action" value="sortbetprice">Tìm</button>
                </form>
              </div>
              <!---MENU BÊN PHẢI------------------------------------------------------------------->
              <div class="leftbanner">
                <img src="img1/product/shop-dong-ho-casio-cua-JPwatch.jpg" alt="">
              </div>
              <div class="leftbanner">
                  <img src="img1/product/shop-đồng-hồ-chính-hãng-casio-mỹ-tho-tiền-giang.jpg" alt="">
                </div>
                <div class="leftbanner">
                    <img src="img1/product/Shop-đồng-hồ-Hải-Phòng-5.jpg" alt="">
                  </div>
            </div>
            <div class="col-md-9">
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="img1/banner/casiog-shockbanner.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="img1/banner-fouette.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-list">
                <div class="toolbar">
                  <div class="sorter">
                  </div>
                </div>
                   
      <!--Hiển thị danh sách sản phẩm-->
                   <?php 
                   //PHÂN TRANG
                  $page=1;$limit=6;
                  $array_list=$db->truyvan("SELECT id FROM `products`");
                  $total_record = count($array_list);
                  $total_page=ceil($total_record/$limit);
                  if(isset($_GET["page"]))
                  $page=$_GET["page"];
                  if($page<1) $page=1;
                  if($page>$total_page) $page=$total_page;
                  $start=($page-1)*$limit;
                  $result;    



                  //SORT theo giới tính
                  if(isset($_GET['gioitinh']) && $_GET['gioitinh']!="")
                  {
                    $gioitinh=$_GET['gioitinh'];
                    $array_list=$db->truyvan("SELECT id FROM `products` WHERE danhcho='$gioitinh'");
                    $total_record = count($array_list);
                    $total_page=ceil($total_record/$limit);
                    if(isset($_GET["page"]))
                      $page=$_GET["page"];
                    if($page<1) $page=1;
                      if($page>$total_page) $page=$total_page;
                        $start=($page-1)*$limit;
                    $result=$db->chen("SELECT * FROM `products` WHERE danhcho='$gioitinh' LIMIT $start,$limit");
                  }            
                  /////////////////
                  else
                  {
                    if(isset($_GET['action']) && $_GET['action']=="sortbetprice")
                    {
                      if(isset($_GET['pricestart']) && $_GET['pricestart']!="")
                        if(isset($_GET['priceend']) && $_GET['priceend']!=""){
                            $start=$_GET['pricestart'];
                            $end=$_GET['priceend'];
                            $result=$db->chen("SELECT * FROM `products` WHERE `price` BETWEEN $start AND $end LIMIT $start,$limit");
                        }
                    }
                    else $result=$db->chen("SELECT * FROM `products` WHERE `price` LIMIT $start,$limit");
                    if(isset($_GET['search']) && $_GET['search']!="")
                    {

                      $search=$_GET['search'];
                      $result=$db->chen("SELECT * FROM `products` WHERE `name` like '%$search%'");

                    }
                  }
                echo '

                      <div class="row">';
                while($row=$result->fetch())
                {echo' 
                       <div class="col-md-4 col-sm-6">
                        <div class="products">
                        <div class="thumbnail">
                          <input type="hidden" name="danhcho">
                          <a href="sanpham/1.php?spid='.$row['id'].'">
                            <img src="'.$row["image"].'" width="200px" height="500px" alt="Product Name">
                          </a>
                        </div>
                        <div class="productname">
                            '.$row["name"].'
                        </div>
                        <h4 class="price">
                            '.round($row["price"]).'$
                        </h4>
                        <div class="button_group"><a href="./danhsach.php?action=addtocart&id='.$row["id"].'" class="button add-cart" type="submit" name="action">Thêm vào giỏ</a></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                      </div>
                      </div>
                      ';
                      
                  }
                    echo '</div>
                         ';
        
                         
                  ?>
                  
                 <!--Hiển thị danh sách sản phẩm-->
                  

                    
                    
                      
                <div class="toolbar">
                  <div class="pager">
                    <a href="danhsach.php?page=<?php echo $page--;?>" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <?php for($i=1;$i<=$total_page;$i++){?>
                    <a name="page" href="danhsach.php?page=<?php 
                      echo $i;
                      if(isset($_GET['gioitinh']))
                      {
                        $gioitinh1=$_GET['gioitinh'] ;
                        echo"&gioitinh=$gioitinh";
                        } 
                        ?>" 
                        value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                    </a>
                    <?php } ?>
                    <a href="danhsach.php?page=<?php echo $page++;?>" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                    </form>
                  </div>
                </div>
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
    <script type="text/javascript" src="js/jquery.easing.1.3.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.sequence-min.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>