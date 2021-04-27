<?php
	include("connection.php");
	

	$items = array();
	$sql="select * FROM product_item where user_id=".$_SESSION['user']."";
    $r=mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($r)) {
		$items[] = $row;
	}


	$product = array();
	$sql1="select * FROM product_item ";
    $p=mysqli_query($con,$sql1);
    while($row1 = mysqli_fetch_assoc($p)) {
		$product[] = $row1;
	}
?>