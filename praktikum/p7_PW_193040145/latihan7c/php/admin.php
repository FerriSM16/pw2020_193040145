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
 <body>
 	<a href="logout.php">
 		<button type="">Logout</button>
 	</a>
 	<a href="tambah.php">
 		<button type="">Tambah Data</button>
 	</a>

 	<form action="" method="get">
 		<input type="text" name="keyword" autofocus>
 		<button type="submit" name="cari">Cari!</button>
 		</form>
 	<table border = "1" cellpadding="13" cellspacing="5">
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
 </body>
 </html>