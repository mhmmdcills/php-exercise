<?php
//userdefine
function tulislah(){
	echo "hai gaes";
	}
tulislah();
echo"<br>";
echo"<hr>";
function tuliskeun($isian){
	echo "hai gaes $isian";
	}

tuliskeun("Arigato");
echo"<br>";
echo"<hr>";
function tuliskah($isian, $isike2){
	echo "hai gaes $isian $isike2";
	}

tuliskah("hiya", "apaan");
//returningvalue
echo"<br>";
echo"<hr>";
function sum($w, $h) {
	$l=$w+$h;
	return $l;
	}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
//explode
echo"<br>";
echo"<hr>";
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

//implode
echo"<br>";
echo"<hr>";

$kal = array('Hello', 'world', 'beautiful', 'day');
echo implode("*", $kal)."<br>";

echo"<hr>";





?>

