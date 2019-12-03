<?php
include 'koneksi.php';
$category  = $_POST['category'];


$sql = "insert into category (name)values ('$category')";
mysqli_query($connect,$sql);
header('location:index.php');
?>