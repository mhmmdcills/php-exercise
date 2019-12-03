	<html>
	<head>
		<title>ITEM pak</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>No</td>
				<td>Category</td>
				<td>name</td>
				<td>Price</td>
				<td>Status</td>
				<td>Operasi</td>				
			</tr>

<?php 
	include "koneksi.php";
	include "../tampil/tampil.php";
	function category($id, $connect){
	$sql = "SELECT * from category where id=".$id;
	$result = mysqli_query($connect, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['name'];
	}



	$lali="SELECT * FROM item";
	$lulo=mysqli_query($connect, $lali);
	$no=1;
	while($data=mysqli_fetch_assoc($lulo)){


?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= category($data['id_category'], $connect);?></td>
				<td><?= $data['name'];?></td>
				<td><?= $data['price'];?></td>
				<td><?= ($data['status'])?'active':'non-active';?></td>
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