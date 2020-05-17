<?php 

	// echo "Ini adalah tampilan hasil";
	// echo "<hr>";

	

	function cekhasil($Angka1,$Angka2){
		return  $Angka1 + $Angka2;
		
	}

	$Angka1 = $_GET['Angka1'];
	$Angka2 = $_GET['Angka2'];
	cekhasil($Angka1,$Angka2);
	echo $Angka1 + $Angka2;
 ?>