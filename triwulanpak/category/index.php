<html>
	<head>
		<title>KATEGORI Pak</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>No</td>
				<td>Category</td>				
			</tr>

<?php 
	include "koneksi.php";
	include "../tampil/tampil.php";

	$lila="SELECT * FROM category";
	$lula=mysqli_query($connect, $lila);
	$no=1;
	while($data=mysqli_fetch_assoc($lula)){
?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= $data['name'];?></td>
				<td>
				<a href="delete.php?id=<?=$data['id'];?>">Delete</a>
				<a href="edit.php?id=<?=$data['id'];?>">Edit</a>
				</td>				
			</tr>
<?php 
	}
?>
		</table>
	</body>
</html>