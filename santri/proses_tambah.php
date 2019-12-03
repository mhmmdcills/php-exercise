<?php
include 'koneksi.php';
$mapel  = $_POST['matapelajaran'];


$sql = "insert into matapelajaran (mapel)values ('$mapel')";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
