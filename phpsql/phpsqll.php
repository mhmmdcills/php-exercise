<?php


	$server= "localhost";
	$user  = "root";
	$password= "1234";
	$dbname      = "pondokit";

	$connect = new mysqli($server, $user, $password, $dbname);

	if(!$connect){
	die("koneksi gagal:".mysqli_connect_error());
	}else{
	echo "connected";
	}
?>

