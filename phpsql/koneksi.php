<?php
	$server    = "localhost";
	$user      = "root";
	$pass      = "1234";
	$database  = "pondokit";

	$konek = mysqli_connect($server, $user, $pass, $database );

	if(!$konek) {
		die("koneksi gagal:".mysqli_connect_error());
	}

