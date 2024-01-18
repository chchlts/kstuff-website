<?php 
session_start();
include "connection.php";

if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id'] = 0;
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>korean stuff</title>
    <meta charset="UTF-8">
    <meta name="description" content=" K-STUFF | eCommerce Template">
    <meta name="keywords" content="korean,stuff,exo,seventeen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.html" class="site-logo">
                            <h3>K-STUFF</h3>

                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            <input type="text" placeholder="Search on K-STUFF....">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <?php
                                    if(isset($_SESSION['user'])){
                                        echo $_SESSION['user'] . ' ';
                                        echo '<a href="logout.php">logout</a>';
                                    }
                                    else{
                                        echo '<a href="login.php">Log in</a>  or <a href="create.php">Create Account</a>';
                                    }
                                ?>
                                
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-bag"></i>
                                </div>
                                <a href="tampil_cart.php">Shopping Cart</a>
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <i class="flaticon-heart"></i>
                                </div>
                                <a href="tampil_wishlist.php">Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="product.php?tabel=all_product">all product</a>
                    </li>
                    <li><a href="product.php?tabel=lightstick">lightstick</a>
                    </li>
                    <li><a href="product.php?tabel=album">album</a>
                    </li>
                    <li><a href="product.php?tabel=merchandise">merchandise</a>
                    </li>
                    <li><a href="index.php">contact us</a></li>
                    <?php
                    if($_SESSION['user'] == "admin"){
                        echo '<li><a href="addproduct.php">add new product</a>
                        </li>';
                    }                    
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header section end -->



    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/konser.jpeg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>KOREAN STUFF</span>
                            <h2>girl/boy group official merchandise</h2>
                            <p>1st korean mercandise online shopping </p>
                            <a href="index.php" class="site-btn sb-line">DISCOVER</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h3>30 krw</h3>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/konser2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>KOREAN STUFF</span>
                            <h2>girl/boy group official merchandise</h2>
                            <p>1st korean mercandise online shopping </p>
                            <a href="index.php" class="site-btn sb-line">DISCOVER</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h3>30 krw</h3>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Premium Products</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>hand carry shipping</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->


    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LATEST PRODUCT</h2>
            </div>
            <div class="product-slider owl-carousel">
                <?php
                    $query = "SELECT * FROM latest_product ORDER BY id ASC";
                    $result = mysqli_query($connect,$query);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/<?php echo $row["image"]; ?>" alt="">
                        <div class="pi-links">
                        <a href="cart.php?add_to_cart=1&id=<?php echo $row["id"];?>&name=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>&quantity=1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>                            
                        <a href="wishlist.php?wishlist=1&id=<?php echo $row["id"];?>&name=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>&quantity=1" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo $row["price"]; ?> krw</h6>
                        <p><?php echo $row["name"]; ?></p>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>

            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>LIGHTSTICK</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="product.php?tabel=all_product">ALL PRODUCT</a></li>
                <li><a href="product.php?tabel=album">ALBUM</a></li>
                <li><a href="product.php?tabel=merchandise">MERCHANDISE</a></li>
            </ul>
            <div class="row">
                <?php
                    $query = "SELECT * FROM lightstick ORDER BY id ASC";
                    $result = mysqli_query($connect,$query);
                    if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_array($result)){

                            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./img/<?php echo $row["image"]?>" alt="">
                            <div class="pi-links">
                                <a href="cart.php?add_to_cart=1&id=<?php echo $row["id"];?>&name=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>&quantity=1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="wishlist.php?wishlist=1&id=<?php echo $row["id"];?>&name=<?php echo $row["name"];?>&price=<?php echo $row["price"];?>&quantity=1" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6><?php echo $row["name"]?></h6>
                            <p><?php echo $row["price"]?> KRW</p>
                        </div>
                    </div>
                </div>
                            
                <?php
                        }
                    }
                ?>
                
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark"><a href="product.php?tabel=lightstick">LOAD MORE</a>
                </button>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->


    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
                <div class="tag-new">NEW</div>
                <span>EARLY COMEBACK</span>
                <h2>FEEL SPECIAL</h2>
                <a href="#" class="site-btn">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- Banner section end  -->


    <!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="index.html"><img src="" alt=""></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>About</h2>
                        <p>the 1st korean merchandise online shop. since 2012. we accept for many payment method</p>
                        <img src="img/cards.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>Questions</h2>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Track Orders</a></li>
                            <li><a href="">Returns</a></li>
                            <li><a href="">Shipping</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Partners</a></li>
                            <li><a href="">Terms of Use</a></li>
                            <li><a href="">Press</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget contact-widget">
                        <h2>Questions</h2>
                        <div class="con-info">
                            <span>C.</span>
                            <p>ichak's Company Ltd </p>
                        </div>
                        <div class="con-info">
                            <span>B.</span>
                            <p>seoul, south korea </p>
                        </div>
                        <div class="con-info">
                            <span>T.</span>
                            <p>+02 3629 2334 2342</p>
                        </div>
                        <div class="con-info">
                            <span>E.</span>
                            <p>ichaks@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                    <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                    <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                    <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
                </div>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="text-white text-center mt-5">Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> ichak's company <i class="fa fa-heart-o" aria-hidden="true"></i> </p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </div>
        </div>
    </section>
    <!-- Footer section end -->



    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>