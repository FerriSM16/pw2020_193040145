<!DOCTYPE html>
<html>
<head>
	<title>Latihan1c</title>
</head>
<body>

	 <style>
	 	.table{
	 		width: 50px;
	 		height: 50px;
	 		border: 1px solid;
	 		text-align: center;
	 		line-height: 50px;
	 		float: left;
	 		margin: 10px -3px -3px 10px;
	 	}
	 	.kotak{
	 		width: 220px;
	 		height: 200px;
	 		border: 1px solid;
	 		text-align: center;
	 		line-height: 50px;
	 		margin: -120px -90px -50px -5px;
	 	}

	 	.clear{
	 		clear: both;
	 	}



	 </style>

	 <?php 
	 		$a="A";
	 		$b="B";
	 		$c="C";
	  ?>

	 <div class="table">
	 	<?php 
	 			echo $a;
	 	 ?>
	 </div>

	  <div class="table">
	 	<?php 
	 			echo $a;
	 	 ?>
	 </div>

	  <div class="table">
	 	<?php 
	 			echo $a;
	 	 ?>
	 </div>
      <div class="clear">

      </div>
	  <div class="table">
	 	<?php 
	 			echo $b;
	 	 ?>
	 </div>

	  <div class="table">
	 	<?php 
	 			echo $b;
	 	 ?>
	 </div>
      <div class="clear">
      	

      </div>
	  <div class="table">
	 	<?php 
	 			echo $c;
	 	 ?>
	 </div>

	 <div class="kotak">
	 	
	 </div>


</body>
</html>