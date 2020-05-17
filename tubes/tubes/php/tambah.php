<?php 
	require 'functions.php';
session_start();

	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit;
	}
	
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>


      <!-- My CSS -->
      <link rel="stylesheet" href="../../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
	<title>Document</title>
</head>
<body class="grey">

  <div class="rowright center">
    <div class="col m6 s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Tambahkan data</span>
          <form action="" method="post">
		<table>
			<tr>
				<td>
					<label for="Foto"><b>Gambar </b></label><br><br>
				</td>
				 <td>:</td>
				<td>
					<input type="gambar" name="Foto">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Merek"><b>Merek Pakaian </b></label><br><br>
				</td>
				 <td>:</td>
				<td>
					<input type="text" name="Merek">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Model"><b>Model Pakaian </b></label><br><br>
				</td>
				 <td>:</td>
				<td>
					<input type="text" name="Model">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Warna"><b>Warna Pakaian </b></label><br><br>
				</td>
				 <td>:</td>
				<td>
					<input type="text" name="Warna">
				</td>
			</tr>
			<tr>
				<td>
					<label for="Harga"><b>Harga </b></label><br><br>
				</td>
				 <td>:</td>
				<td>
					<input type="text" name="Harga">
				</td>
			</tr>
		</table>
		<button type="submit" name="tambah">Tambah Data! </button>
		<button type="submit">
			<a href="../php/admin.php" style="text-decoration: none; color: black;">Kembali</a>
		</button>
	</form>
        </div>
      </div>
    </div>
  </div>

	
</body>
</html>