<?php 
	require 'functions.php';

	if (isset($_POST['tambah'])) {
		if (tambah($_POST) > 0) {
			echo "<script>	
				alert('Data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		} 
		else 
		{
			echo "<script>	
				alert('Data gagal ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
		}
	}
 

 ?>










<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>
					<label for="Foto">Gambar </label><br><br>
				</td>
				<td>
					<input type="gambar" name="Foto">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Merek">Merek Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Merek">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Model">Model Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Model">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Warna">Warna Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Warna">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Harga">Harga </label><br><br>
				</td>
				<td>
					<input type="text" name="Harga">
				</td>
			</tr>
		</table>
		<button type="submit" name="tambah">Tambah Data! </button>
		<button type="submit">
			<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
		</button>
	</form>
</body>
</html>