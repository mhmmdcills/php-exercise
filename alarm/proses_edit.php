<?php
include 'koneksi.php';
$id		=$_POST['id'];
$name   =$_POST['name'];
$gender =$_POST['gender'];
$adrs   =$_POST['address'];


$sql = "UPDATE siswa SET name = '$name', gender = '$gender', address = '$adrs' WHERE id= '$id'";
mysqli_query($konek,$sql);
header('location:index.php');
?>




