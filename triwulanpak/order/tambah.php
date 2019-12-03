<html>
	<head>
		<title>Tambah Data</title>
	</head>
	<body>
		<?php 
			include  'koneksi.php';
			$sql = 'select * from item';
			$result = mysqli_query($connect, $sql);

		?>
		<form method="post" action="proses_tambah.php">
			table_number<br><input type="text" name="table_number"><br>
			item_id<br>
				<select name="item_id">
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
					?>
					<option  value="<?= $row['id']; ?>">
						<?= $row['name']; ?>
					</option>
					<?php
					}
					?>

				</select><br>
			qty<br><input type="text" name="qty"><br>
			<input type="submit" value="Send">
		</form>
	</body>
</html>