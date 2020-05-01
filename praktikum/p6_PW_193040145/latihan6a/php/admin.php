<?php 
	// menghubungkan dengan file php lainnya
	require 'functions.php';

	// melakukan query
	$apparel = query("SELECT * FROM apparel");
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
 		<?php $i = 1; ?>
 		<?php foreach ($apparel as $appl) : ?>
 			<tr>
 				<td><?= $i;  ?></td>
 				<td>
 					<a href=""><button>Ubah</button></a>
 					<a href=""><button>Hapus</button></a>
 				</td>
 				<td><img src="../asset/img/<?= $appl['Foto']; ?>" alt=""></td>
 				<td><?= $appl ['Merek']; ?></td>
 				<td><?= $appl ['Model']; ?></td>
 				<td><?= $appl ['Warna']; ?></td>
 				<td>Rp <?= $appl ['Harga']; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	</table>
 </body>
 </html>