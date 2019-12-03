<?php
include 'koneksi.php';
$ID    		= $_POST['id'];
$category    	= $_POST['category'];


$sql = "UPDATE category SET name = '$category' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>