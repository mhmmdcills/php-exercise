<?php
include 'koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM matapelajaran WHERE id = '$ID'";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
