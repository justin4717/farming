<?php
	include("connection.php");
	$items = array();
	$sql="select * FROM user_reg where reg_id>=2";
    $r=mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($r)) {
		$items[] = $row;
	}
?>