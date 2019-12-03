<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<form action="proses_tambah.php" method="POST">
		<label for="namaInput" >Nama :</label>
		<input type="namaInput" name="name" type="text">
		<br>
				<!-- Jenis Kelamin -->
				<label>Jenis Kelamin :</label>
				<br>
		<!-- Laki -->
		<label for ="laki">Laki-laki</label>
		<input id="laki" type="radio" name="gender" value="1">
		<br>
		<!-- ciwi -->
		<label for ="pr">Perempuan :</label>
		<input id="pr" type="radio" name="gender" value="0">
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
