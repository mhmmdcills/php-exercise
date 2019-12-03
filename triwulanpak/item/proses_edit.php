<?php
include 'koneksi.php';
$ID 			= $_POST['id'];
$id_category	= $_POST['id_category'];
$name		  	= $_POST['name'];
$price		    = $_POST['price'];
$status 		= $_POST['status'];


$sql = "UPDATE item SET name='$name', id_category = '$id_category', price = '$price', status= '$status' WHERE id = '$ID'";
mysqli_query($connect, $sql);
header('location:index.php');
?>