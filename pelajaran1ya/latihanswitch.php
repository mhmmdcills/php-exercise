

	<form action="" method="post">

		<label>Angka:</label>
		<input  type="number" name= "angka" value="">


		<input type="submit" value="Jumlah">


<?php
		$angka= $_POST['angka'];
switch ($angka) {
	case = 0:
	case ($angka <=100 and $angka >90):
		echo "Nilai anda A, nilai mu sudah bagus, pertahankan";
		break;
	case ($angka <=90 and $angka >80):
		echo "Nilai anda B, lebih rajin ya selanjutnya";
		break;
	case ($angka <=80 and $angka >70 ) :
		echo "Nilai anda C, selamat nilai pas KKM";
		break;
	case ($angka <=70 and $angka >60):
		echo "Nilai anda D, Kerjakan Perbaikan halaman 59";
		break;
	case ($angka <=60 and $angka >40):
		echo "Nilai anda E, Wajib ikut Remidi";
		break;
	case ($angka <=40 and $angka >20):
		echo "Nilai Anda terlalu rendah, Kerjakan perbaikan halaman 59 dan ikutlah Remidial";
		break;
	case ($angka <=20 and $angka >=0):
		echo "Mohon segera datang ke ruang BK";
		break;
	default:
		echo "Masukkan Nilai dengan benar";
		break;
}
?>
	</form>

