<?php
	include("connection.php");

	$districts = array();

	$state=$_POST['state'] ;
	$sql_dt="select *
				from district
				where state_id=".$state;
	$p=mysqli_query($con,$sql_dt);
	while ($row_district = mysqli_fetch_assoc($p)) {
		$districts[] = $row_district;
	}
	echo json_encode($districts);
?>