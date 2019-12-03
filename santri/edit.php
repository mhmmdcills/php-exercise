<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from matapelajaran where id=$ID";
		$hasil  = mysqli_query($konek,$sql);
		$row    = mysqli_fetch_assoc($hasil);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Mata Pelajaran : <br>
			<input type="text" name="mapel" value="<?php echo $row['mapel']; ?>"><br>

			<input type="submit" value="Submit">
		</form>
	</body>
</html>
