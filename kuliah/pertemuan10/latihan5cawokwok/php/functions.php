<?php 
	// function untuk melakukan koneksi ke database
	function koneksi() {
		$conn = mysqli_connect("127.0.0.1", "root", "") or die ("Koneksi ke DB gagal");
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

 ?>