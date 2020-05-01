<?php 

	// Mengecek apakah ada no yang dikirimkan
	// Jika tidak maka akan dikembalikan ke halaman index.php
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	// Mengambil no dari url
	$id = $_GET['id'];

	// melakukan query dengan parameter no yang diambil dari url
	$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];
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
				<img src="../asset/img/<?= $apparel['Foto']; ?>" alt="">
			</div>
			<div class="keterangan">
				<p><?= $apparel["Merek"]; ?></p>
				<p><?= $apparel["Model"]; ?></p>
				<p><?= $apparel["Warna"]; ?></p>
				<p><?= $apparel["Harga"] ?></p>
			</div>

			<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
		</div>
</body>
</html>