<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from user where id=$ID";
		$hasil  = mysqli_query($konek,$sql);
		$row    = mysqli_fetch_assoc($hasil);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
			Password : <br>
			<input type="password" name="password" value="<?php echo $row['password']; ?>"><br>
			Email : <br>
			<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
			TTL : <br>
			<input type="date" name="ttl" value="<?php echo $row['ttl']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
