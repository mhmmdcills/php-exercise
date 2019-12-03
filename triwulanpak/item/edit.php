<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from item where id='$ID'";
		$result  = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>

		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?= $ID ?>">
			id_category<br>
				<select name="id_category">
		<?php
			$sql1	= "select * from category";
			$result1 = mysqli_query($connect, $sql1);
			while ($data=mysqli_fetch_assoc($result1)) {
			if ($data['$id']==$row['id_category']) {

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
		
			Name :	
			<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
			 <br>
			 Price :
			<input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
			 <br>
			Status: <br>
			<input type="radio" name="status" value="1" <?php echo($row['status'])?"checked":""; ?>>Active
			<input type="radio" name="status" value="0"<?php echo($row['status'])?"":"checked"; ?>>Non-Active		
			<input type="submit" value="Submit">
		</form>
	</body>
</html>