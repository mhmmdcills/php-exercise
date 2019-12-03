<html>
	<head>
		<title>Tambah Data</title>
	</head>
	<body>
		<?php 
			include  'koneksi.php';
			$sql = 'select * from category';
			$result = mysqli_query($connect, $sql);
			

		?>
		<form method="post" action="proses_tambah.php">
			id_category<br>
				<select name="id_category">
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
			name<br><input type="text" name="name"><br>
			price<br><input type="number" name="price"><br>
			status<br>
				<label><input type="radio" name="status" value='1'>Active</label>
				<label><input type="radio" name="status" value='0'>Non-Active</label><br>
			<input type="submit" value="Send">
		</form>
	</body>
</html>