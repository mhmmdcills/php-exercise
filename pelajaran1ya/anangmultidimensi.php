<html>
<head>
	<meta charset="utf-8">
	<title>tugas Array</title>
</head>
	<body>		
		<h1>PHP Multidimensi</h1>
		<h6>adalah array yang terdiri beberapa array/array dalam array dan bisa juga didalamnya ada array lagi</h6>
		<?php

			
		//1. Contoh Array Two Dimensional
		$benda= array
                     (
                      array("meja","kursi"),
		      array("buku","batu")
                      );

			echo "Pakdhe punya: ".$benda[0][0]."dan".$benda[1][1];
			echo "<br>";
		$sabun= array
		     (
		      array("biore","sunlight"),
		      array("lux","mamalemon")

		);
			echo "Fahmi punya sabun:". $sabun[0][0]. "tapi mandi memakai". $sabun[1][1];
			echo "<br>";

		//2. contoh array three dimensional
		$mapel=array(array(array("IPA", "PKN", "IPS")));
			echo "budhe suka:".$mapel[0][0][1];

			echo "<br>";

		$perabot=array(array(array("Rantang", "Karpet", "Triplek")));
			echo "Syauqy jualan:".$perabot[0][0][2];
		
			echo "<br>";

		$micin=array(array(array("Masako", "Royco", "Sasa")));
			echo "Juminten mengoplos:".$micin[0][0][1]."dan".$micin[0][0][2];

			echo "<br>";

		//3.contoh ascending index array
		$mieinstant = array("Sedap", "Indomie", "Sarimi");

		sort($mieinstant);
		var_dump($mieinstant);

		echo "<br>";
		echo "<br>";

		$shampo = array("Emeron", "Dove", "Head&SHoulders", "Wardah");

		sort($shampo);
		var_dump($shampo);

		echo "<br></br>";

		$odol = array("Pepsodent", "Kodomo", "CloseUp");

		sort($odol);
		var_dump($odol);
	
		echo "<br></br>";

		//4. COntoh descending Index Array	
		$daging = array("Ayam", "bebek", "unta");
		rsort($daging);
		var_dump($daging);

		echo "<br><br>";

		$kue = array("Brubi", "apem", "cupcakes");
		rsort($kue);
		var_dump($kue);

		//5. Ascending associative array
		$nilai = array("Dhika"=>"90", "Dinda"=>"82", "Fiddin"=>"67");
		asort($nilai);
		var_dump($nilai);
		
		echo "<br></br>";

		$berat = array("Gilang"=>"55", "Nenek"=>"43", "Papi"=>"87");
		asort($berat);
		var_dump($berat);

		echo "<br></br>";

		//6. contoh descending associative array
		$usia = array("Fifi"=>"22", "Nita"=>"15", "Asih"=>"19");
		arsort($usia);
		var_dump($usia);

		echo "<br></br>";
		
		$tinggi = array("Ghofur"=>"167", "Luthfi"=>"136", "Dandy"=>"143");
		arsort($tinggi);
		var_dump($tinggi);
		
		echo "<br></br>";
		
		//7. Ascending key associative array

		$lemak = array("Lays"=>"200", "Chitato"=>"250", "Potabee"=>"4000");
		ksort($lemak);
		var_dump($lemak);

		echo "<br></br>";

		$netto = array("Sarimurni"=>"234", "Sariwangi"=>"222", "Tehpoci"=>"532");
		ksort($netto);
		var_dump($netto);
	
		echo "<br></br>";

		$bruto = array("Floridina"=>"934", "buavita"=>"292", "momogi"=>"232");
		ksort($bruto);
		var_dump($bruto);
	
		echo "<br></br>";

		//8. Descending key associative array
		$kadar = array("Masako"=>"2990", "royko"=>"2500", "magiclezat"=>"400");
		ksort($kadar);
		var_dump($kadar);

		echo "<br></br>";

		$pembayaran = array("oVo"=>"5000", "Gopay"=>"5500", "Dana"=>"8000");
		ksort($pembayaran);
		var_dump($pembayaran);
	
		echo "<br></br>";

		$ukuran = array("kaos"=>"22", "celana"=>"32", "kemeja"=>"26");
		ksort($ukuran);
		var_dump($ukuran);
				
		?>
	</body>
</html>
