<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from category where id=$ID";
		$result  = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			Category : <br>
			<input type="text" name="category" value="<?php echo $row['name']; ?>"><br>

			<input type="submit" value="Submit">
		</form>
	</body>
</html>