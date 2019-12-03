<?php

$server = "localhost";
$user   = "root";
$pass   = "1234";
$dbname = "point_of_sale";

$connect = mysqli_connect($server, $user, $pass, $dbname);

$sql	= "create table category(id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, name VARCHAR(100))";
mysqli_query($connect, $sql);
?>