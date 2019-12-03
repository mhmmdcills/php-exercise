<?php
include 'koneksi.php';
$ID    		= $_POST['id'];
$mapel    	= $_POST['mapel'];


$sql = "UPDATE matapelajaran SET mapel = '$mapel' WHERE id = '$ID'";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
