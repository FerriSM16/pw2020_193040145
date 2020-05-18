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




function hapus($id) {
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");
	return mysqli_affected_rows($conn);
}





function ubah($data)
{
	$conn = koneksi();

	$id = htmlspecialchars($data['id']);
	$Foto = htmlspecialchars($data['Foto']);
	$Merek = htmlspecialchars($data['Merek']);
	$Model = htmlspecialchars($data['Model']);
	$Warna = htmlspecialchars($data['Warna']);
	$Harga = htmlspecialchars($data['Harga']);

	$query = "UPDATE apparel
			SET
			Foto = '$Foto',
			Merek = '$Merek',
			Model = '$Model',
			Warna = '$Warna',
			Harga = '$Harga'
			WHERE id = '$id'
			";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function registrasi($data) {
	$conn = koneksi();
	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>  
        alert('Username sudah digunakan!');
        </script>";
        return false;
	}


	$password = password_hash($password, PASSWORD_DEFAULT);
	
	$query = "INSERT INTO user VALUES
			('', '$username', '$password')";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>