<?php
include("connection.php");
session_start();

$table = $_GET['tabel'];
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
<div class="row">
                <?php
                    $query = "SELECT * FROM $table ORDER BY id ASC";
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

</body>
</html>