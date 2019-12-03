<html>
 <head>
	<title>pelajaran php ke2</title>
 </head>

  <body>
	<?php 
	$string	   = "Budi";
	$string2   = 'Dhika';
	$integer   = 123;
	$integer2  = 0123;
	$float     = 3.14;
	$bool      = true;
	$arr       = array("volvo","BMW","toyota");
	$null      = null;


	//echo $string;
	//echo "<br>";
	//echo $string2;
	//echo "<br>";
	//echo $integer;
	//echo "<br>";
	//echo $integer2;
	//echo "<br>";
	//echo $float;
	//echo "<br>";
	//echo $bool;
	//echo "<br>";
	//echo $arr;
	//echo "<br>";
	//echo $null;
	//echo $integer2
	
	echo strlen("Assalamu 'alaikum!");
	echo "<br>";
	echo str_word_count("Selamat Siang mbah!");
	echo "<br>";
	echo strrev("Kokoro No Tomoto!");
	echo "<br>";
	echo strpos("Kelinci Pakdhe","Pakdhe");
	echo "<br>";
	echo str_replace("permen","micin","ngemil permen??");
	?>
  </body>

</html>
