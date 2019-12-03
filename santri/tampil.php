<html>
	<head>
		<title>INDEKS cuuuu</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>Nomor</td>
				<td>Mata Pelajaran</td>
				<td>Operasi</td>				
			</tr>

<?php 
	include "koneksi.php";

	$lila="SELECT * FROM matapelajaran";
	$lula=mysqli_query($konek, $lila);
	$no=1;
	while($data=mysqli_fetch_assoc($lula)){
?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= $data['mapel'];?></td>
				<td>
				<a href="delete.php?id=<?=$data['id'];?>">Hapuzz</a>
				<a href="edit.php?id=<?=$data['id'];?>">Editz</a>
				</td>				
			</tr>
<?php 
	}
?>
		</table>
	</body>
</html>
