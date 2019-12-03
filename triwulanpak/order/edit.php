<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from ordeer where id='$ID'";
		$result  = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>

		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?= $ID ?>">
			item_id<br>
				<select name="item_id">
		<?php
			$sql1	= "select * from item";
			$result1 = mysqli_query($connect, $sql1);
			while ($data=mysqli_fetch_assoc($result1)) {
			if ($data['$id']==$row['item_id']) {

		 ?>
					<option  value="<?= $data['id']; ?>" selected>
						<?= $data['name']; ?>
					</option>
		<?php 
			}
			else{
		 ?>
					 <option  value="<?= $data['id']; ?>">
						<?= $data['name']; ?>
					</option>
		<?php  
		   }
		   }
		?>
				</select><br>
		
			Table Number :	
			<input type="text" name="table_number" value="<?php echo $row['table_number']; ?>"><br>
			 <br>
			 Qty :
			<input type="text" name="qty" value="<?php echo $row['qty']; ?>"><br>
			 <br>	
			<input type="submit" value="Submit">
		</form>
	</body>
</html>