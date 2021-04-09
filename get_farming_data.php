<?php
	include("connection.php");
	$sql_farming="SELECT * from farmin_type_master";
	$f=mysqli_query($con,$sql_farming);
	while ($row_farming = mysqli_fetch_assoc($f)) {
		$farming_item[] = $row_farming;
		# code...
	}
?>