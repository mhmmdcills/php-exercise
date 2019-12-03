<?php 

include 'koneksi.php';

$name   =$_POST['name'];
$gender =$_POST['gender'];
$adrs   =$_POST['address'];

$sql	="INSERT INTO siswa(name, gender, address) VALUES('$name', '$gender', '$adrs')";


mysqli_query($konek, $sql);
header('location: index.php');
