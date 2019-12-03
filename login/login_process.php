<?php
session_start();
include '../matapelajaransantri/koneksi.php';
$email	= $_POST['email'];
$pass	= ($_POST['pass']);

if (!null == ($email && $pass)) {
	$sql	= "select * from user where email='".$email . "' AND password='".$pass."'";
	$hasil	= mysqli_query($konek, $sql);
	if (mysqli_num_rows($hasil)>0) {
		$data = mysqli_fetch_assoc($hasil);
		$_SESSION['email'] = $email;

		header('location:../layout/layout.html');
	} else {
		echo "Email atau Password anda salah";
	}

} else {
	echo "Silahkan isi form login terlebih dahulu";
}
?>
