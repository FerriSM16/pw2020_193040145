<?php 
	
	// $arah = array("kanan","kiri");

	// $arah[2] = "atas";

	// $arah[] = "bawah";

	// $arah[1] = "kanan";
	// $arah[0] = "kiri";

	// echo "panjang array = ".count($arah);
	// echo "<br>";
	// print_r($arah);
	// echo "<br>";

	// for ($i=0; $i < count($arah); $i++) {
	// 	echo "Arah = ".$arah[$i]; 
	// 	echo "<br>";
	// }

	// echo "<br>";

	// $i = 1;
	// foreach ($arah as $namaarah) {
	// 	echo $namaarah;
	// }

	// array multidimensi
	// $mahasiswa = array ();
	// $mahasiswa[0][0]= "123040403";
	// $mahasiswa[0][1]= "Ferri Syamsul Ma'arif";
	// $mahasiswa[1][0]= "Subang";
	// $mahasiswa[1][1]= "081xxxxxx";
	// print("<pre>".print_r($mahasiswa,true)."</pre>");


	// for ($i=0; $i < count($mahasiswa) ; $i++) { 
	// 	for ($j=0; $j < count($mahasiswa); $j++) { 
	// 		echo $mahasiswa[$i][$j];
	// 		echo "<br>";
	// 	}
	// }





// $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

// 	echo "Nama nama bulan ada = ".count($bulan);
// 	echo "<br>";
// 	print_r($bulan);
// 	echo "<br>";


// 	for ($i=0; $i < count($bulan); $i++) {
// 		echo "bulan = ".$bulan[$i]; 
// 		echo "<br>";
// 	}






$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");


	$angka = array(5,2,6,4,3,1);

	$hasil = array_pop($bulan);
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