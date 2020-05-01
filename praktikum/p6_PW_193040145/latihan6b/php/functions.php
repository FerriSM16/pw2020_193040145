<?php 
	// function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");
		mysqli_select_db($conn, "pw_193040145") or die("Database salah!");
		return $conn;
	}

	// function untuk melakukan query ke database
	function query($sql){
		$conn = koneksi();
		$result = mysqli_query($conn , "$sql");

		$rows = []; 
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}






function tambah($data)
{
	$conn = koneksi();

	$Foto = htmlspecialchars($data['Foto']);
	$Merek = htmlspecialchars($data['Merek']);
	$Model = htmlspecialchars($data['Model']);
	$Warna = htmlspecialchars($data['Warna']);
	$Harga = htmlspecialchars($data['Harga']);

	$query = "INSERT INTO apparel VALUES
			('', '$Foto', '$Merek', '$Model', '$Warna', '$Harga')";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>