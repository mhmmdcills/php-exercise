<?php

$server = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "point_of_sale";

$connect = mysqli_connect($server, $user, $pass, $dbname);

$sql	= "CREATE TABLE ordeer(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	table_number VARCHAR(10) NOT NULL,
	item_id INT NOT NULL,
	qty INT NOT NULL,
	total INT NOT NULL,
	FOREIGN KEY(item_id) REFERENCES item(id))";
mysqli_query($connect, $sql);
?>