<html>
<head>
	<meta charset="utf-8">
	<title>tugas Array</title>
</head>
	<body>		
		<?php
		$cars = array 
		(
		array("Vellfire",22,18),
		array("Avanza", 15,13),
		array("Pajero",5,3),
		array("Ayla",17,15),
		);		
		//var_dump($cars);
		echo"<br>";

//echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
//echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
//echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$carso = array("Volvo", "BMW", "Toyota");
rsort($carso);
var_dump($carso);

$umur = array("Neta"=>59, "Krisna"=>32, "Lintang"=>15);
arsort($umur);
var_dump($umur);


		?>
	</body>
</html>
