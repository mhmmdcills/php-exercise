<?php
include 'koneksi.php';
$table_number   = $_POST['table_number'];
$item_id  	    = $_POST['item_id'];
$qty	   	    = $_POST['qty'];

$sql 	= "select price from item where id='$item_id'";
$result =mysqli_query($connect, $sql);
$row 	=mysqli_fetch_assoc($result);
$total	=$qty * $row['price'] ;

$sql = "insert into ordeer (table_number, item_id, qty, total)values ('$table_number','$item_id','$qty','$total')";
mysqli_query($connect,$sql);
header('location:index.php');
?>