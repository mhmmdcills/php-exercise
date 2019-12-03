<html>
	<head>
		<title>INDEKS wkwk</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>Nomor</td>
				<td>id Santri</td>
				<td>id Pelajaran</td>
				<td>Nilai Angka</td>
				<td>Nilai Huruf</td>
				<td>Operasi</td>				
			</tr>

<?php 
	include "koneksi.php";

	function users($id, $konek){
	$sql = "SELECT * from user where id=".$id;
	$hasil = mysqli_query($konek, $sql);
	$data = mysqli_fetch_assoc($hasil);
	return $data['nama'];
	}

	function mapels($id, $konek){
	$sql   ="SELECT * from matapelajaran where id=".$id;
	$hasil = mysqli_query($konek, $sql);
	$data   = mysqli_fetch_assoc($hasil);
	return $data['mapel'];
	}

	$lali="SELECT * FROM matapelajaransantri";
	$lulo=mysqli_query($konek, $lali);
	$no=1;
	while($data=mysqli_fetch_assoc($lulo)){


?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= users($data['id_santri'], $konek);?></td>
				<td><?= mapels($data['id_pelajaran'], $konek);?></td>
				<td><?= $data['nilai_angka'];?></td>
				<td><?= $data['nilai_huruf'];?></td>
				<td>
				<a href="delete.php?id=<?=$data['id'];?>">Hapoes</a>
				<a href="edit.php?id=<?=$data['id'];?>">Edyiet</a>
				</td>				
			</tr>
<?php 
	}
?>
		</table>
	</body>
</html>
