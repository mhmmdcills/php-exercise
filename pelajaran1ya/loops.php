<?php
	$x=1;
	while ($x <=5) {
		echo "<span>".$x."</span></br>";
		$x++;
		}

	$g=1;
	while ($g <= 10) {
		if($g%2==1)	{	
		echo "<span>".$g."</span></br>";
		}
		$g++;
		}

	$z=1;
	while ($z <= 10) {
		if($z%2==0)	{	
		echo "<span>".$z."</span></br>";
		}
		$z++;
		}

	$y=1;
	do {
		echo "saya sudah mandi</br>";
		$y++;
		}while ($y < 10);

	for ($i=0; $i < 10; $i++){
		echo "<span>saya lapar</span></br>";
		}

	$colors= array( "red", "pink", 5=> "cyan", "purple");
	foreach ($colors as $index => $value) {
	echo "$index => $value </br>";
	}


	 $nominal= array (1=> 1, 2, 3, 4, 5);
	foreach ($nominal as $index => $value) {
	echo "$index => $value </br>";
	}

	 $nominal= array (1=> 1,3=>3, 5=>5);
	foreach ($nominal as $index => $value) {
	echo "$index => $value </br>";
	}

	 $nominal= array (2=> 2,4=>4, 6=>6);
	foreach ($nominal as $index => $value) {
	echo "$index => $value </br>";
	}

?>
