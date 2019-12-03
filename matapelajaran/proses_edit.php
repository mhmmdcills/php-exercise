<?php
include 'koneksi.php';
$ID    		= $_POST['id'];
$nama    	= $_POST['nama'];
$password   = $_POST['password'];
$email  	= $_POST['email'];
$ttl	 	= $_POST['ttl'];

$sql = "UPDATE user SET nama = '$nama', password = '$password', email = '$email', ttl = '$ttl' WHERE id = '$ID'";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
