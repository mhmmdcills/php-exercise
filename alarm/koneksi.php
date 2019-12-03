<?php
	$server   ="localhost";
	$usr      ="root";
	$pass     ="1234";
	$dbname   ="alarm";

	$konek 	  = mysqli_connect($server, $usr, $pass, $dbname);

	if (!$konek) {

			die("koneksi gagal:".mysqli_connection_error());
	}
