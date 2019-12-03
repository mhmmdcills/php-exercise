<html>
	<head>
		<title>ORDEER pak</title>
	</head>
	<body>
	<a href="tambah.php">Tambah Data</a>
		<table border="1" cellpadding="5px">
			<tr>
				<td>No</td>
				<td>table number</td>
				<td>item_id</td>
				<td>qty</td>
				<td>total</td>
				<td>Diskon</td>
				<td>After-diskon</td>
				<td>Operasi</td>				
			</tr>

<?php 
	include "koneksi.php";
	include "../tampil/tampil.php";
	function item($id, $connect){
	$sql = "SELECT * from item where id=".$id;
	$result = mysqli_query($connect, $sql);
	$data = mysqli_fetch_assoc($result);
	return $data['name'];
	}



	$lali="SELECT * FROM ordeer";
	$lulo=mysqli_query($connect, $lali);
	$no=1;
	while($data=mysqli_fetch_assoc($lulo)){


?>

			<tr>
				<td><?= $no++;?></td>
				<td><?= $data['table_number'];?></td>
				<td><?= item($data['item_id'], $connect);?></td>
				<td><?= $data['qty'];?></td>
				<td><?= $data['total'];?></td>
				<td><?= ($data['total']>100000)?'20%':'-'; ?></td>
				<td><?= diskon($data['total'], $connect) ?></td>
				<td>
				<a href="delete.php?id=<?=$data['id'];?>">Delete</a>
				<a href="edit.php?id=<?=$data['id'];?>">Edit</a>
				</td>				
			</tr>
<?php 
	}
	function diskon($data, $connect){
		if ($data>100000) {
					return $data-($data*20/100);
				}		
		else {
					return $data; 	
		}
	}
?>
		</table>
	</body>
</html>