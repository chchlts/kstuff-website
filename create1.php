<?php
include("connection.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO user(username,password) VALUES ('$username','$password')";
mysqli_query($connect,$sql);
$_SESSION["user"]= $username;

header("location:index.php");
?> 