<?php 

function luaslingkaran($phi, $r){
	$luasL = $phi*($r*$r);
	return $luasL;
}

function tambahdualingkaran($luas1, $luas2){
	$totalL = $luas1 + $luas2;
	return $totalL;
}

$PHI = 3.14;
$r1 = 5;
$r2 = 5;

$luasL1 = luaslingkaran($PHI, $r1);
$luasL2 = luaslingkaran($PHI, $r2);

echo "Total Luas 2 Lingkaran = ".tambahdualingkaran($luasL1, $luasL2);

 ?>