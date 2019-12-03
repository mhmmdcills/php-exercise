<html>
	<head></head>
	<body>

		<form action="" method="post">

		<h2>DISINI PENJUMLAHAN</h2>
		
		<input type="number" name= "jumlah1" value="<?php echo isset($_POST['jumlah1'])?$_POST['jumlah1']:""; ?>" />
		+
		<input type="number" name= "jumlah2" value="<?php echo isset($_POST['jumlah2'])?$_POST['jumlah2']:""; ?>" />
		<button type="submit" name="submitnambah" >Jumlahkan</button>	
		
		<br><br>
	<?php
			if(isset($_POST ['jumlah1']) and (['jumlah2'])) 

		{
			$jumlah1=$_POST['jumlah1'];
			$jumlah2=$_POST['jumlah2'];

			echo "<br>" . $jumlah1 . " + " . $jumlah2 . "=" . ($jumlah1+$jumlah2). "</br>";

		}

			else 

		{
			echo "<br>Isi Kedua Input diatas</br>";
		}

	?>

		<br><br><br><br><br><br>

		<h2>INPUT NILAU KAU DIBAWAH SINI !!</h2>

		<label>
		Nilai Kau:		
		<input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>" />
		</label>
		<input type="submit" value="Pencet aja"/>

		<?php
		if (isset($_POST['nilai']))
		{
			$nilai = $_POST['nilai'];
			
			if($nilai == 100)
			{
				echo "Uhsheupppp,, Kerennn!! <br> Nilai Anda A+";
			}
			
			else if($nilai >=90 and $nilai <100)
			{
				echo "Wah nilai Anda A!";
			}

			else if($nilai >=85 and $nilai <90)	
			{
				echo "Yuhuu,<br> Nilai Anda A-";
			}

			else if($nilai >=75 and $nilai <85)
			{
				echo "Semangatt <br> Nilai Anda B+";
			}

			else if($nilai >=70 and $nilai <75)
			{
				echo "Belajar yang giat,<br> nilai mu sudah B";
			}

			else if($nilai >=50 and $nilai <70)
			{
				echo "BELAJAR YANG RAJIN, NILAI MU C,<br> pertemuan selanjutnya kamu Remidi";
			}

			else if($nilai >=40 and $nilai <50)
			{
				echo "BELAJAR YANG RAJIN, NILAI MU D, <br> Akan ada surat peringatan";
			}

			else if($nilai >=0 and $nilai <40)
			{
				echo "Pertemuan selanjutnya, ajak MAK BAPAK kau ke sekolah";
			}

			else if($nilai >=100)
			{
				echo "GA USAH KORUPSI NILAI DEH";
			}
			
			else if($nilai <=0)
			{
				echo "nilai mu ga ada bambank";
			}		
		
		}
	    ?>




		</form>	
	</body>
</html>
