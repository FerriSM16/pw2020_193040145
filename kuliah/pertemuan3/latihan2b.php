<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
		<table border="1" cellpadding="3" cellspacing="0">
			<tr>
				<th class="table">Kolom 1</th>
				<th class="table">Kolom 2</th>
				<th class="table">Kolom 3</th>
				<th class="table">Kolom 4</th>       	  	             	 	
				<th class="table">Kolom 5</th>
			</tr>
			<?php 
					$a="Baris";
					$b="Kolom";
			 ?>

			 <style>
			 	.table
			 	{
			 		width: 150px;
			 		height: 40px;
			 	}
			 	.kotak
			 	{
			 		width: 150px;
			 		height: 20px;
			 	}
			 </style>

			<tr>
				<th class="table">
					<?php 
							echo $a. " 1, " .$b.  " 1";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 1, " .$b. " 2";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 1, " .$b. " 3";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 1, " .$b. " 4";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 1, " .$b. " 5";
					 ?>
				</th>
			</tr>
			<tr>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
			</tr>
			<tr>
				<th class="table">
					<?php 
							echo $a. " 3, " .$b. " 1";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 3, " .$b. " 2";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 3, " .$b. " 3";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 3, " .$b. " 4";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 3, " .$b. " 5";
					 ?>
				</th>
			</tr>
			<tr>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
				<th class="kotak"></th>
			</tr>
			<tr>
				<th class="table">
					<?php 
							echo $a. " 5, " .$b. " 1";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 5, " .$b. " 2";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 5, " .$b. " 3";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 5, " .$b. " 4";
					 ?>
				</th>
				<th class="table">
					<?php 
							echo $a. " 5, " .$b. " 5";
					 ?>
				</th>
			</tr>

		</table>


</body>
</html>