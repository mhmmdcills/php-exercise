<?php
include 'koneksi.php';
$idsantri   = $_POST['idsantri'];
$idpelajaran   = $_POST['idpelajaran'];
$nilaiangka  = $_POST['nilaiangka'];
$nilaihuruf = $_POST['nilaihuruf'];

$sql = "insert into matapelajaransantri (id_santri, id_pelajaran, nilai_angka, nilai_huruf)values ('$idsantri','$idpelajaran','$nilaiangka','$nilaihuruf')";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
