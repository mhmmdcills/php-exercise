<?php

$alfabet = array("A","B","C","D","E","F","G");
$huruf1 = 0;
for($x = 6; $x >=0; $x--){
	for ($a = 0; $a <= $x; $a++){
	echo $alfabet[$a];
		}
	for ($c = 6-$x; $c>0; $c--){
	echo".....";
		}
	for ($b = $x; $b>= 0; $b--){
	echo $alfabet[$b];		
		}
	echo"<br>";	
	}
	
?>
