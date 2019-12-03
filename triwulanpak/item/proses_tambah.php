<?php
include 'koneksi.php';
$id_category   = $_POST['id_category'];
$name   	   = $_POST['name'];
$price  	   = $_POST['price'];
$status 	   = $_POST['status'];

$sql = "insert into item (id_category, name, price, status)values ('$id_category','$name','$price','$status')";
mysqli_query($connect,$sql);
header('location:index.php');
?>