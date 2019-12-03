<?php

function pesan($nama, $umur) {
echo "halo $nama, umur saya $umur";
}
pesan("juminten",20);
"<br>"; "<br>";
pesan("figo c.",18);
"<br>";
		
?>
<br><hr><br>
<?php
function tmbh($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . tmbh(5, 10) . "<br>";
echo "7 + 13 = " . tmbh(7, 13) . "<br>";
echo "2 + 4 = " . tmbh(2, 4);
?>
<hr>
<?php
function ulang($angkapertama, $baris){
	for($i=$angkapertama; $i<=$baris; $i++){
	for ($j=$angkapertama; $j<=$i ; $j++)	{
	echo "$j ";
}	
	echo"<br>";
}
}
ulang(40, 10);
ulang(2, 3);
?>
<?php

?>
