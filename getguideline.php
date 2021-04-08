<?php
	include("connection.php");
	$sql_guideline="SELECT * from guideline";
	$g=mysqli_query($con,$sql_guideline);
	while ($row_guideline = mysqli_fetch_assoc($g)) {
		$guideline_item[] = $row_guideline;
		# code...
	}
?>