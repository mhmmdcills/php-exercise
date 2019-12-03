<?php
include 'koneksi.php';
$nama   = $_POST['nama'];
$password   = $_POST['password'];
$email  = $_POST['email'];
$ttl = $_POST['ttl'];

$sql = "insert into user (nama, password, email, ttl)values ('$nama','$password','$email','$ttl')";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
