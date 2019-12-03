<?php

function apaan1($angka, $baris) {
	for ($h = 0; $h < $baris ; $h++) {
		for ($i=0; $i <= $h ; $i++){
			$j= $angka + $i;
			if ($j>=50 and $j<80){
			$apalah = "c";
			}
			elseif ($j>=0 and $j<50){
			$apalah = "c";
			}
			elseif ($j>=90 and $j<100){
			$apalah = "A";
			}
			if ($j>=80 and $j<90){
			$apalah = "B";
			}
			echo "$j($apalah)";
		}
	echo "<br>";
}
}
	apaan1(50,3);echo"<br>";
	apaan1(60,5);echo"<br>";
	apaan1(80,3);echo"<br>";
?>


