<?php
for ( $f1 = 0; $f1 < 6 ; $f1++)
{for ($f2 = 0 ; $f2 < $f1 ; $f2++)
{echo "*" ;}
echo "<br>";}

echo "<br>";

for ( $g1 = 5 ; $g1 > 0 ; $g1--)
{for ($g2 = $g1 ; $g2 >= 1 ; $g2--)
{echo "*" ;}
 echo "<br>";}

echo "<br>";

for ($i1 = 1 ; $i1 <=5 ; $i1++)
{for ($i2 = 1 ; $i2<= $i1; $i2++)
{echo $i2 ;}
 echo "<br>";}

echo "<br>";


	$n=1;
	while ($n <= 10) {
		if($n%2==0)	{	
		echo "<span>".$n."</span></br>";
		}
		$n++;
		}


echo "<br>";
for($w=10;$w>=0;$w--){
echo $w."<br>";
}

echo "<br>";
for($z=10;$z>=0;$z--){
if ($z%2==0){
echo "<span>".$z."</span><br>";
}
}

echo "<br>";
for($q=10;$q>=1;$q--){
if ($q%2==1){
echo "<span>".$q."</span><br>";
}
}

echo "<br>";

?>
<form method="post">
Nilai :<input type="number" name="cc" value="<?php echo isset($_POST['cc'])? $_POST['cc']:"";?>">

<button  type="submit" onclick="hitung(); return false;">Hitoenglah</button>
</form>
<?php

$l=$_POST['cc'];
for ( $w1 = 1; $w1 <=15 ; $w1++)
{for ($f2 = 0 ; $f2 < $w1 ; $f2++)
{echo "$l" ;}

echo "<br>";}


?>
