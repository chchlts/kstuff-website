<?php
include("connection.php");
session_start();

?>
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

<h3>WISHLIST</h3>
			<div class="table-responsive">
                <?php
                    if(isset($_GET["remove"])){
                        $message ='
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dissmiss="alert aria-label="close">&times;</a>
                            item removed </div>
                        ';
                        echo $message;
                    }

                ?>
                <div align="right">
                    <a href="cart.php?action=clear"><b>Clear wishlist cart</b></a>
                </div>
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
                        <th width="5%">Action</th>
                        <th width="5%">Action</th>
					</tr>
                    <?php
                    if(isset($_COOKIE["wishlist"]))
                    {
                        $total = 0;
                        $cookie_data = stripslashes($_COOKIE['wishlist']);
                        $cart_data = json_decode($cookie_data, true);
                        foreach($cart_data as $keys => $values)
                        {
                    ?>
                        <tr>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td><?php echo $values["item_price"]; ?></td>
                            <td><?php echo number_format($values["item_price"] * $values["item_quantity"], 2); ?> KRW</td>
                            <td><a href="wishlist.php?action=delete&id=<?php echo $values["item_id"]; ?>">remove</a></td>
                            <td><a href="wishlist.php?action=add_to_cart&id=<?php echo $values["item_id"]; ?>">add to cart</a></td>
                        </tr>                  
                    <?php
                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                        }
                    ?>
                        <tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 2); ?> KRW</td>
						<td></td>
					</tr>
                    <?php
                    }
                    else{
                        echo '
                        <tr> 
                            <td colpan="5" align="center"> NO ITEM IN CART </td>
                        </tr>
                        ';
                    }
					
					?>						
                </table>
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