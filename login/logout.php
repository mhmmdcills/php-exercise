<?php
	session_start();
	unset($_SESSION["email"]);

	echo "Anda telah keluar";
	header('Refresh: 2; URL = login.php')

?>
