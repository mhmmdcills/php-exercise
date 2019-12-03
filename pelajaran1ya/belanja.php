<html>

	<head>

	<img src="http://www.ultraspeedaustralia.com/wp-content/uploads/2018/11/Hypermart.png" width="1345" height="275"></img>
		
	<style>

h2 {border-left:25px solid red; background-color:pink; color:Purple; text-align: center; font-size:35px;} 
p {text-align: center; background-color: lightgreen;}

h5 {background-color:cyan; 
	color:darkblue; 
	text-align: center; 
	font-size:20px;  
	margin-right: 200px;
	margin-left: 200px;
	}
body {background-image: url("https://forums.macrumors.com/attachments/color_gradient_005-png.97955/"); 
	background-size:2000px;
	}

label {margin: auto;}

.form1 {background-color:pink;}

.iki {width: 300px; margin: auto; color: white; background-color: hsla(9, 100%, 64%, 0.4);}

.dipencet {background-color: lightblue;}	

	</style>

	<h2>Selamat Datang di Hypermart, Solusi belanja cerdas dan hemat!</h2>

<hr><hr><hr><hr>

	
	</head>



	<body>

	<h5>Masukkan Jumlah Belanjaan Anda disini </h5>
	<div class="iki">
	<form action="" method="post">

		<label>Jumlah belanja:
		<input class='form1' type="number" name= "jumlahblanja" value="
		<?php 
		echo isset($_POST['jumlahblanja'])?$_POST['jumlahblanja']:""; ?>" />
		</label>

		<br>
	
		<input class="dipencet" type="submit" value="Jumlah">


		<br><br>

		<?php 
	if (isset($_POST['jumlahblanja']))

	{	
		$jumlahblanja = (int)$_POST['jumlahblanja'];
		$kurang = (int)40000-$jumlahblanja;
		$lebih = (int)$jumlahblanja-40000;

		if($jumlahblanja == 40000)
		{
			echo "Belanjaan anda sudah pas, segera pulang sudah ditunggu rakyatmu pada laper";
		}

		elseif($jumlahblanja < 40000 and $jumlahblanja >0)
		{
			echo "Belanjaan anda kurang Rp. ".$kurang." mohon ditambah agar pas, atau mau isi pulsanya sekalian kak? rotinya lagi promo juga!, atau tambah belanjaan lain juga boleh!";
		}

		elseif($jumlahblanja < 0)
		{
			echo "masukkan nominal dengan tepat";
		}

		elseif($jumlahblanja > 40000)
		{
			echo "Mohon maaf, saldo ATM anda tidak cukup, Jumlah terlalu banyak, mohon kurangi belanjaan sebesar Rp.".$lebih."   :)";
		}

		else
		{
			echo "Mohon Masukkan total belanja dengan tepat!";
		}
	}
		?>
		</div>

	<h5>Hitung diskon yang anda dapatkan disini </h5>
		
		<div class="iki">
		<label>Total belanja:
		<input class='form1' type="number" name= "diskonan" value=hitung<?php echo isset($_POST['diskonan'])?$_POST['diskonan']:""; ?>" />
		</label>

		<br>

		<input class="dipencet" type="submit" value="Hitung">


		<br><br>

		<?php 
	if(isset($_POST['diskonan']))

	{	
		$diskonan = (int)$_POST['diskonan'];
		$diskon = (int)$diskonan-$diskonan * 17.5/100;

	if ($diskonan > 0){
		echo "selamat anda mendapat diskon dan cukup membayar sebesar $diskon";
	}
	

	elseif($diskonan < 0)
	{
		echo "Masukkan Nominal dengan tepat";
	}
	}
	

		?>
	
	</form>
	</div>
<hr><hr><hr><hr>
	</body>
	<h2>Terimakasih, Selamat berbelanja kembali!</h2>
	<p>© Copyright 2019 ananghyper</p>
</html>
