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

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>


      <!-- My CSS -->
      <link rel="stylesheet" href="../../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">

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
</head><br><br>
<body class="grey">

  <div class="rowright center">
    <div class="col m6 s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p><br>
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
		</div></p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>