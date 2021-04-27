<?php
	include("connection.php");
	



	$product = array();
	$sql1="select * FROM product_item ";
    $p=mysqli_query($con,$sql1);
    while($row1 = mysqli_fetch_assoc($p)) {
		$product[] = $row1;
	}
?>