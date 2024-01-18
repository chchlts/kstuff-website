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
    include("connection.php");
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($connect, "SELECT * from user where username='$username' and password='$password'");

    $cek = mysqli_num_rows($data);
    if ($cek > 0) //data ditemukan
    {
        $_SESSION["user"] = $username;
        header("location:index.php");
    }
    else{//data tidak ditemukan user harus create akun dulu
        
    ?>             
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dissmiss="alert aria-label="close">&times;</a>
                add new account
         </div>
    
        <?php
        header("location:create.php");
    }

    ?>
</body>
</html>
