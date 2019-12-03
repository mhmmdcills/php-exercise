<?php


	$server= "localhost";
	$user  = "root";
	$password= "1234";
	$db      = "phpsqll";

	$con = mysqli($server, $user, $password, $db);

	if(!$con){
	die("koneksi gagal:".mysqli_connect_error());
}
?>

