<?php
include("connection.php");
session_start();
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$table = $_POST['tabel'];
echo $table;
$sql = "INSERT INTO $table(name,image,price) VALUES ('$name','$image','$price')";
mysqli_query($connect,$sql);
if($table != 'all_product'){
    $sql = "INSERT INTO all_product(name,image,price) VALUES ('$name','$image','$price')";
    mysqli_query($connect,$sql);
}
header("location:addproduct.php");
?>