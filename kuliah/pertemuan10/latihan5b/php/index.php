<?php 
	// menghubungkan dengan file php lainnya
	require 'functions.php';

	// melakukan query
	$pakaian = query("SELECT * FROM Pakaian")
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 2</title>
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
		
		<?php 
			$Barang = array(
			array("<img src = 'asset//img/1.jpg'>", "Cardinal", "Pakaian Pria dewasa", "Hitam dan Putih", " Rp. 135.000."),
			array("<img src = 'asset//img/2.jpg'>", "Neil Allyn", "Pakaian Pria dewasa", "Putih","Rp 1.208.000."),
			array("<img src = 'asset//img/3.jpg'>", "Zara clothing", "Pakaian Wanita(Cape Colar)", "Coklat", "Rp 2.350.000"),
			array("<img src = 'asset//img/4.jpg'>", "Burberry ", "Middy Collar", "Kuning", "Rp 900.000."),
			array("<img src = 'asset//img/5.jpg'>", "Armani", "Kaos Wanita", "Putih", "Rp 230.000"),
			array("<img src = 'asset//img/6.jpg'>", "Gucci", "Hoodie Peria/Wanita", "Hitam", "Rp 809.000"),
			array("<img src = 'asset//img/7.jpg'>", "Dior", "Dresses Wanita", "Biru Tua", "Rp.1.305.000"),
			array("<img src = 'asset//img/9.jpg'>", "Louis Vuitton", "Jeans Wanita", "Biru Pudar", "Rp 374.950."),
			array("<img src = 'asset//img/8.jpg'>", "levis", "Celana Pria", "Coklat Gelap", "Rp.203,000"),
			array("<img src = 'asset//img/10.jpg'>", "UniqLo", "Kaos Pria/Wanita", "Putih", "Rp.500.000.")
	
			);

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
				<tr>
					<td><h3>Foto</h3></td>
					<td><h3>Merek Peralatan Elektronik</h3></td>
					<td><h3><center>Tipe/Model barang</center></h3></td>
					<td><h3>Tahun Rilis</h3></td>
					<td><h3>Harga</h3></td>
				</div>
				</tr>
	
				<tr>
					<td><?php echo $Barang[0][0] ?></td>
					<td><?php echo $Barang[0][1] ?></td>
					<td><?php echo $Barang[0][2] ?></td>
					<td><?php echo $Barang[0][3] ?></td>
					<td><?php echo " ".$Barang[0][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[1][0] ?></td>
					<td><?php echo $Barang[1][1] ?></td>
					<td><?php echo $Barang[1][2] ?></td>
					<td><?php echo $Barang[1][3] ?></td>
					<td><?php echo " ".$Barang[1][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[2][0] ?></td>
					<td><?php echo $Barang[2][1] ?></td>
					<td><?php echo $Barang[2][2] ?></td>
					<td><?php echo $Barang[2][3] ?></td>
					<td><?php echo " ".$Barang[2][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[3][0] ?></td>
					<td><?php echo $Barang[3][1] ?></td>
					<td><?php echo $Barang[3][2] ?></td>
					<td><?php echo $Barang[3][3] ?></td>
					<td><?php echo " ".$Barang[3][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[4][0] ?></td>
					<td><?php echo $Barang[4][1] ?></td>
					<td><?php echo $Barang[4][2] ?></td>
					<td><?php echo $Barang[4][3] ?></td>
					<td><?php echo " ".$Barang[4][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[5][0] ?></td>
					<td><?php echo $Barang[5][1] ?></td>
					<td><?php echo $Barang[5][2] ?></td>
					<td><?php echo $Barang[5][3] ?></td>
					<td><?php echo " ".$Barang[5][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[6][0] ?></td>
					<td><?php echo $Barang[6][1] ?></td>
					<td><?php echo $Barang[6][2] ?></td>
					<td><?php echo $Barang[6][3] ?></td>
					<td><?php echo " ".$Barang[6][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[7][0] ?></td>
					<td><?php echo $Barang[7][1] ?></td>
					<td><?php echo $Barang[7][2] ?></td>
					<td><?php echo $Barang[7][3] ?></td>
					<td><?php echo " ".$Barang[7][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[8][0] ?></td>
					<td><?php echo $Barang[8][1] ?></td>
					<td><?php echo $Barang[8][2] ?></td>
					<td><?php echo $Barang[8][3] ?></td>
					<td><?php echo ". ".$Barang[8][4] ?></td>
				</tr>
				<tr>
					<td><?php echo $Barang[9][0] ?></td>
					<td><?php echo $Barang[9][1] ?></td>
					<td><?php echo $Barang[9][2] ?></td>
					<td><?php echo $Barang[9][3] ?></td>
					<td><?php echo " ".$Barang[9][4] ?></td>
				</tr>
				
		</table>
	</body>
</htmlBarang>