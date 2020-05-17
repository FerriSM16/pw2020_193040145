<?php 
	// menghubungkan dengan file php lainnya
	require 'functions.php';
	session_start();

	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit;
	}

	if(isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$apparel = query("SELECT * FROM apparel WHERE
			foto LIKE '%$keyword%' OR
			merek LIKE '%$keyword%' OR
			model LIKE '%$keyword%' OR
			warna LIKE '%$keyword%' OR
			harga LIKE '%$keyword%' ");
	} else {
	$apparel = query("SELECT * FROM apparel");
 
	}
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
				width: auto;
				height: auto;
			}
			img {
				width: 200px;
			}

		</style>
</head>
 <body class="grey">

  <div class="rowright center">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <a href="logout.php">
 		<button type="">Logout</button>
 	</a><br><br>
 	<a href="tambah.php">
 		<button type="">Tambah Data</button>
 	</a><br><br>

 	<form action="" method="get">
 		<input type="text" name="keyword" autofocus>
 		<button type="submit" name="cari">Cari!</button>
 		</form>
 	<table border = "1" cellpadding="13" cellspacing="5"><br>
 		<tr>
 			<th>#</th>
 			<th>opsi</th>
 			<th>Foto</th>
 			<th>Merek Pakaian</th>
 			<th>Model Pakaian</th>
 			<th>Warna Pakaian</th>
 			<th>Harga</th>
 		</tr>
 		<?php if(empty($apparel)) : ?>
 				<tr>
 					<td colspan="11">
 						<h1>Data tidak diemukan</h1>
 					</td>
 				</tr>

 			<?php else : ?>
 		<?php $i = 1; ?>
 		<?php foreach ($apparel as $appl) : ?>
 			<tr>
 				<td><?= $i;  ?></td>
 				<td>
 					<a href="ubah.php?id=<?= $appl['id']; ?>"><button>Ubah</button></a>
 					<a href="hapus.php?id=<?= $appl['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
 				</td>
 				<td><img src="../asset/img/<?= $appl['Foto']; ?>" alt=""></td>
 				<td><?= $appl ['Merek']; ?></td>
 				<td><?= $appl ['Model']; ?></td>
 				<td><?= $appl ['Warna']; ?></td>
 				<td>Rp <?= $appl ['Harga']; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	<?php endif; ?>
 	</table>
        </div>
        
      </div>
    </div>
  </div>

 	
 </body>
 </html>