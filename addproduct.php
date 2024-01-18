<!DOCTYPE html>
<html lang="en">
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
    <?php
    session_start();
    ?>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> ADD NEW PRODUCT </h3>
                    </div>
                    <div class="card-body">

                        <form action="prosesproduct.php" method="POST" onSubmit="return validasi()">
                            <input type="text" class="form-control mb-2" placeholder="nama barang" name="name" id="name">
                            <input type="text" class="form-control mb-2" placeholder="harga" name="price" id="price">
                            <input type="text" class="form-control mb-2" placeholder="gambar" name="image" id="image">
                            <select name="tabel" id="tabel" class="form-control mb-2" placeholder="tabel database">
                                <option value="all_product">all_product</option>
                                <option value="album">album</option>
                                <option value="latest_product">latest_product</option>
                                <option value="lightstick">lightstick</option>
                                <option value="merchandise">merchandise</option>
                            </select>
                            <button class="btn btn-primary" name="add_product">add</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
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