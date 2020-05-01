<?php 
	require 'functions.php';
	$id = $_GET['id'];
	$appl = query ("SELECT * FROM apparel WHERE id = $id")[0];

	if(isset($_POST['ubah'])) {
		if (ubah($_POST) > 0) {
			echo "<script>	
				alert('Data berhasil diubah');
				document.location.href = 'admin.php';
			</script>";
		} 
		else 
		{
			echo "<script>	
				alert('Data gagal diubah');
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
		<input type="hidden" name="id" value="<?= $appl['id']; ?>">
		<table>
			<tr>
				<td>
					<label for="Foto">Gambar </label><br><br>
				</td>
				<td>
					<input type="gambar" name="Foto"  value="<?= $appl['Foto']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Merek">Merek Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Merek"  value="<?= $appl['Merek']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Model">Model Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Model"  value="<?= $appl['Model']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Warna">Warna Pakaian </label><br><br>
				</td>
				<td>
					<input type="text" name="Warna"  value="<?= $appl['Warna']; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Harga">Harga </label><br><br>
				</td>
				<td>
					<input type="text" name="Harga"  value="<?= $appl['Harga']; ?>">
				</td>
			</tr>
		</table>
		<button type="submit" name="ubah">Ubah Data! </button>
		<button type="submit">
			<a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
		</button>
	</form>
</body>
</html>