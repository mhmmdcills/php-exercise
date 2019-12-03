<?php
include 'koneksi.php';
$ID    			= $_POST['id'];
$idsantri   	= $_POST['idsantri'];
$idpelajaran    = $_POST['idpelajaran'];
$nilaiangka  	= $_POST['nilaiangka'];
$nilaihuruf	 	= $_POST['nilaihuruf'];

$sql = "UPDATE matapelajaransantri SET idsantri = '$idsantri', idpelajaran = '$idpelajaran', nilaiangka = '$nilaiangka', nilaihuruf = '$nilaihuruf' WHERE id = '$ID'";
mysqli_query($konek,$sql);
header('location:tampil.php');
?>
