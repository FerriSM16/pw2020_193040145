<?php 

	$nama = array("1. Motherboard","2. Procwssor","3. Hard Disk","4. PC Coller","5. SSD");


	$angka = array(5,2,6,4,3,1);

	$hasil = array_pop($nama);
	print_r($bulan);
	echo "<hr>";

	// $angka = array_pop($angka);
	$hasil = array_push($angka, 10,9,8,7);
	print_r($angka);

	echo "<hr>";
	$hasil = rsort($angka);
	print_r($angka);
	// print_r($bulan);
	echo "<hr>";

 ?>