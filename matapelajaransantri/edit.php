<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from matapelajaransantri where id=$ID";
		$hasil  = mysqli_query($konek,$sql);
		$row    = mysqli_fetch_assoc($hasil);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			id Santri : <br>
			<input type="text" name="idsantri" value="<?php echo $row['idsantri']; ?>"><br>
			id Pelajaran : <br>
			<input type="text" name="idpelajaran" value="<?php echo $row['idpelajaran']; ?>"><br>
			Nilai Angka : <br>
			<input type="text" name="nilaiangka" value="<?php echo $row['nilaiangka']; ?>"><br>
			Nilai huruf : <br>
			<input type="text" name="nilaihuruf" value="<?php echo $row['nilaihuruf']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
