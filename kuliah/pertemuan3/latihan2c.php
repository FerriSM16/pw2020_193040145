<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 2</title>
	<style>
		.kotak
		{
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.kotak1
		{
			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;
		}
		.clear
		{
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
	$a = 1;
	$b = 1;
	while ($a <= 1) 
	{
		for ($b=1; $b <= 1; $b++) { 
			echo "<div class = 'kotak'>#".$a."</div>";
			echo "<div class = 'kotak1'>".$a."</div>";
		}
		echo "<div class = 'clear'></div>";
		$a++;
	}


	while ($a <= 2) 
	{
		for ($b=1; $b <= 2; $b++) { 
			echo "<div class = 'kotak'>#".$a."</div>";
			echo "<div class = 'kotak1'>".$a."</div>";
		}
		echo "<div class = 'clear'></div>";
		$a++;
	}


	while ($a <= 3) 
	{
		for ($b=1; $b <= 3; $b++) { 
			echo "<div class = 'kotak'>#".$a."</div>";
			echo "<div class = 'kotak1'>".$a."</div>";
		}
		echo "<div class = 'clear'></div>";
		$a++;
	}


	while ($a <= 4) {
		for ($b=1; $b <= 4; $b++) { 
			echo "<div class = 'kotak'>#".$a."</div>";
			echo "<div class = 'kotak1'>".$a."</div>";
		}
		echo "<div class = 'clear'></div>";
		$a++;
	}


	while ($a <= 5) 
	{
		for ($b=1; $b <= 5; $b++) { 
			echo "<div class = 'kotak'>#".$a."</div>";
			echo "<div class = 'kotak1'>".$a."</div>";
		}
		echo "<div class = 'clear'></div>";
		$a++;
	}
	 ?>

</body>
</html>