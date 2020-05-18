<?php 

	// Mengecek apakah ada no yang dikirimkan
	// Jika tidak maka akan dikembalikan ke halaman index.php
	if (!isset($_GET['id'])) {
			//location latihan5c diganti ku ..
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	// Mengambil no dari url
	// No
	$No = $_GET['id'];

	// melakukan query dengan parameter no yang diambil dari url
	$apparel = query("SELECT * FROM apparel WHERE No = $No")[0];
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		
			body {
				text-align: center;
			}
			img {
				width: 200px;
			}

		</style>
</head>
<body>
		<div class="container">
			<div class="gambar">

			<!-- eweuh  ../  di asset/img na  -->
				<img src="../asset/img/<?= $apparel['Foto']; ?>" alt="">
			</div>
			<div class="keterangan">
				<p><?= $apparel["Merek Pakaian"]; ?></p>
				<p><?= $apparel["Model Pakaian"]; ?></p>
				<p><?= $apparel["Warna Pakaian"]; ?></p>
				<p><?= $apparel["Harga"] ?></p>
			</div>

			<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
		</div>
</body>
</html>