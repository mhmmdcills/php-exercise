<?php
include 		'koneksi.php';
$ID 			= $_POST['id'];
$item_id	  	= $_POST['item_id'];
$table_number	= $_POST['table_number'];
$qty		    = $_POST['qty'];
$sql1 	= "select price from item where id='$item_id'";
$result =mysqli_query($connect, $sql1);
$row 	=mysqli_fetch_assoc($result);
$total	=$qty * $row['price'] ;

$sql = "UPDATE ordeer SET item_id='$item_id', table_number = '$table_number', qty = '$qty', total= '$total' WHERE id = '$ID'";
mysqli_query($connect, $sql);
header('location:index.php');
?>