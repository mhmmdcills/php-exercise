<html>
<head>
	<meta charset="utf-8">
	<title>tugas Array</title>
</head>
	<body>		
		<?php
		//1.PHP Array adalah :  merupakan tipe data yang menyimpan satu data, bahkan lebih didalam variabel tunggal yang sesuai dengan fungsinya, bisa dibilang tipe data yang unik.

		//2A. Array Indexed : array yang menyimpan setiap bagian array dengan indeks numerik
		//2B. Index Asosiatif : array yang indeksnya ditentukan secara manual, bisa menggunakan angka atau simbol tertentu
		
		//3. Contoh array indexed
			//contoh1
		$motor = array("Scoopy", "Nmax", "Vario");
		$merek = array("Royco", "Masako", "Kobe");
		echo "saya suka naik " . $motor[0];
		echo "<br>";
		echo "sambil ngemil " . $merek[1];
		echo "<br>";
		echo "<br>";
			//contoh2
		$buah = array("Leci", "Delima", "Lemon");
		$rasa = array("Hambar", "Manis", "Kecut");
		echo "saya Tidak Suka" . $buah[0] . "Rasanya" . $rasa[0];
		echo "<br>";
		echo "tapi saya suka" . $buah[2] . "karena" . $rasa[2];
		echo "<br>";
		echo "<br>";
			//contoh3
		$warna[0] = "Coklat tua";
		$warna[1] = "Kemerahan";
		$warna[2] = "Sawo matang";
		echo "kulitnya memang terlihat". $warna[0] . "Walau aslinya" . $warna[2] . "Yang sedikit" . $warna[1];
		echo "<br>";
		echo "<br>";


		//4. Array Asosiatif
		$hewan = array("hewan1" => "ayam", "hewan2" => "bebek", "hewan3" => "kelinci");
		echo $hewan["hewan1"];
		echo $hewan["hewan2"];
		echo $hewan["hewan3"];

		$sayur = array("sayur1" => "brokoli", "sayur2" => "wortel", "sayur3" => "kentang");
		echo $sayur["sayur2"];
		echo $sayur["sayur3"];
		echo $sayur["sayur1"];

		$tepung = array("tepung1" => "maizena", "tepung2" => "sajiku", "tepung3" => "rosebrand");
		echo $tepung["tepung2"];
		echo $tepung["tepung1"];
		echo $tepung["tepung3"];

		$kota = array("kota1" => "lamongan", "kota2" => "bondowoso", "kota3" => "lumajang");
		echo $kota["kota2"];
		echo $kota["kota1"];
		echo $kota["kota3"];
	
		
		
		
		
		?>
	</body>
</html>
