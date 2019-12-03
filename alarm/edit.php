<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php 
		include 'koneksi.php';
		$id		= $_GET['id'];
		$sql	= "SELECT * FROM siswa WHERE id=$id ";
		$result = mysqli_query($konek, $sql);
		$row 	= mysqli_fetch_assoc($result);
		?>


		<form action="proses_edit.php" method="POST">

		<input type="hidden" name="id" value="<?php echo $id ?>"
	
		<label for="namaInput" >Nama :</label>
		<input type="namaInput" name="name" type="text" value="<?php echo $row ['name']?>">
		<br>
				<!-- Jenis Kelamin -->
				<label>Jenis Kelamin :</label>
				<br>
		<!-- Laki -->
		<label for ="laki">Laki-laki</label>
		<input id="laki" type="radio" name="gender" value="1" <?php echo ($row['gender'])?'checked':""?>>
		<br>
		<!-- ciwi -->
		<label for ="pr">Perempuan :</label>
		<input id="pr" type="radio" name="gender" value="0" <?php echo ($row['gender'])?'':'checked'?>>
		<br>
		<!--address-->
		<label for="addressInput">Alamat</label>
		<textarea name="address" id="addressInput"></textarea>
		<br>
		<!--SUbmit kirim-->
		<button type="submit">Kirim</button>
		</form>
	</body>
</html>
