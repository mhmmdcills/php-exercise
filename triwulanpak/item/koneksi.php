<?php

$server = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "point_of_sale";

$connect = mysqli_connect($server, $user, $pass, $dbname);

$sql	= "CREATE TABLE item(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	id_category INT NOT NULL,
	name VARCHAR(100) NOT NULL,
	price INT NOT NULL,
	status BOOLEAN,
	FOREIGN KEY(id_category) REFERENCES category(id))";
mysqli_query($connect, $sql);
?>