<?php 


function HitungLuasKubus($sisi) {

	$luas = 6*($sisi*$sisi);
	return $luas;

}

function tambahLuaDuaKubus($luas1, $luas2)
{
	$total_luas	= $luas1+$luas2;
	return $total_luas;
}

// Kubus pertama
$sisi1 = 9;

// kubus kedua
$sisi2 = 4;

// luas Ke 1
$luas1 = HitungLuasKubus($sisi1);
// $luas1 = 6*($sisi1 * $sisi1);

// luas ke 2
$luas2 = HitungLuasKubus($sisi2);
// $luas2 = 6*($sisi2 * $sisi2);

// Total luas
$total_luas = $luas1 + $luas2;

echo "Total Luas = ".$total_luas."<br>";


// echo "luas kubus 1 = ".HitungLuasKubus($sisi1)."<br>";
// echo "luas kubus 2 = ".HitungLuasKubus($sisi2)."<br>";

// $total = HitungLuasKubus($sisi1) + HitungLuasKubus($sisi2);

// echo "Total Luas = ".$total;


// echo "Total Luas (function self) = ".tambahLuaDuaKubus(HitungLuasKubus($sisi1), HitungLuasKubus($sisi2));
echo "Total Luas (function self) = ".tambahLuaDuaKubus($luas1, $luas2);

// fungsi tambah luas 2 kubus




 ?>