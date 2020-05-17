<?php 

	echo "Ini adalah tampilan hasil";
	echo "<hr>";

	

	function ceklogin($Username,$Password){
		if ($Username == "admin" && $Password=="12345")
		{
			echo "Selamat Datang Admin";
	}else{
		echo "username /
			password salah";
	}
	}

	$Username = $_GET['Username'];
	$Password = $_GET['Password'];
	ceklogin($Username,$Password);
 ?>